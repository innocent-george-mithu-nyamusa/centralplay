<?php

namespace Classes;

class SeriesView extends SeriesContr
{

    public function createSeries(
        string $seriesName,
                  string $seriesType,
                   int $seriesDuration,
                  string $seriesRating,
                  string $seriesDirector
    ): bool {

        $this->setCSeriesDuration($seriesDuration);
        $this->setCSeriesDirector($seriesDirector);
        $this->setCSeriesId();
        $this->setCSeriesName($seriesName);
        $this->setCSeriesType($seriesType);
        $this->setCSeriesRating($seriesRating);

        return parent::createSeriesResult();
    }

}