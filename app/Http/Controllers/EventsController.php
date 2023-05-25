<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventsController extends Controller
{
    // Endpoint 1
    function getEventById(int $event_id): JsonResponse
    {
        // Validation (ID must not be negative)
        if($event_id < 0) return new JsonResponse(null, 400);

        // Searching database for queried id, automatic Error Code 404 if id not found
        $result = Event::findOrFail($event_id);

        // sending the result
        return new JsonResponse($result, 200);
    }


    // Endpoint 2
    function getEvents(Request $request): JsonResponse
    {
        // Validation of request (Query Params)
        $request->validate([
            'place' => 'string|nullable',
            'startdate' => ['date', 'nullable'],
            'enddate' => ['date', 'nullable'],
            'enddate' => 'exclude_if:startdate, null|after_or_equal:startdate',
            'skintype' => 'string|nullable',
            'eventtype' => 'string|nullable',
            'search' => 'string|nullable',
            'sort' => 'string|nullable',
            'page' => 'integer|nullable|min:1',
            'per-page' => 'integer|nullable|min:1|max:10'
        ]);

        // create query for Database
        $query=Event::query()
            ->leftJoin('reviews', 'events.id', '=', 'reviews.event_id')
            ->selectRaw('events.*, avg(reviews.value) as rating')
            ->groupBy('events.id');


        // apply place and enum filters
        if(request('place')) $query->whereRaw('LOWER(events.place) LIKE ?', ['%' . strtolower($request->input('place')) . '%']);
        if(request('eventtype')) $query->whereRaw('LOWER(events.eventtype) LIKE ?', ['%' . strtolower($request->input('eventtype')) . '%']);
        if(request('skintype')) $query->whereRaw('LOWER(events.skintype) LIKE ?', ['%' . strtolower($request->input('skintype')) . '%']);

        // convert query parameter dates to DateTime
        if($request->input('startdate') != null && $request->input('startdate') > today())
        {
            $startDate = date_create($request->input('startdate'));
            $startDate->setTime(0,0,0,0);
        }
        else $startDate = today();

        if($request->input('enddate') != null)
        {
            $endDate = date_create($request->input('enddate'));
            $endDate->setTime(0,0,0,0);
        }
        else $endDate = null;

        // apply date filters
        if($startDate !== null) $query->where('date', '>=', $startDate);
        if($endDate !== null) $query->where('date', '<=', $endDate);

        // sorting
        if ($request->input('sort') === 'price')
        {
            $query->orderBy('price', 'desc');
        }
        else if ($request->input('sort') === 'reviews')
        {
            $query->orderBy('rating', 'desc');
        }
        else if ($request->input('sort') === 'date')
        {
            $query->orderBy('date');
        }
        else
        {
            // default sorting method
            $query->orderBy('date');
        }

        // pagination with ORM
        $perPage = $request->input('per-page') ?? 6;
        if ($request->input('page') !==null) $query->paginate($perPage, null, null, $request->input('page') ?? 1);

        /* pagination with php: cutting out the list part that is requested
        $page = $request->input('page') ?? 1;
        $perPage = $request->input('per-page') ?? 4;
        $resultArray = $result->toArray();
        $resultArray = array_slice($resultArray, ($page - 1) * $perPage, $perPage);*/

        $result = $query->get();

        // sending the result
        return new JsonResponse($result, 200);
    }
}