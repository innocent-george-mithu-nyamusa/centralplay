<?php

namespace Classes;

class SeriesContr extends Series
{

    protected function setCSeriesId(): void
    {
        $seriesId = Utilities::genUniqueId("ser");
        parent::setSeriesId($seriesId);
    }
    protected function setCSeriesDirector(string $seriesDirector): void
    {
        $seriesDirector = Utilities::cleanData($seriesDirector);
        parent::setSeriesDirector($seriesDirector);
    }

    protected function setCSeriesName(string $seriesName): void
    {
        $seriesName = Utilities::cleanData($seriesName);
        parent::setSeriesName($seriesName);
    }

    protected function setCSeriesRating(string $seriesRating): void
    {
        $seriesRating = Utilities::cleanData($seriesRating);
        parent::setSeriesRating($seriesRating);
    }

    protected function setCSeriesType(string $seriesType): void
    {
        $seriesType = Utilities::cleanData($seriesType);
        parent::setSeriesType($seriesType);
    }

    protected function setCSeriesDuration(int $seriesDuration): void
    {
        $seriesDuration = Utilities::cleanData($seriesDuration);
        parent::setSeriesDuration($seriesDuration);
    }
}