<?php

return function($page, $site) {

    $filterBy = get('filter');
    $unfiltered = collection('projects');
    $projects = $unfiltered
        ->when($filterBy, function($filterBy) {
            return $this->filterBy('category', $filterBy);
        });


    $pagination = $projects->pagination();

    $filters = $unfiltered->pluck('category', null, true);

    return [
        'projects' => $projects,
        'pagination' => $pagination,
        'filters' => $filters
    ];
};
