<?php


namespace Classes;


class MovieContr extends Movie
{

    protected function setCMovieId(): void
    {
        $movieId = Utilities::genUniqueId("mov");
        parent::setMovieId($movieId);
    }

    protected function addMovieId(string $movieId): void
    {
        $movieId = Utilities::cleanData($movieId);
        parent::setMovieId($movieId);
    }

    protected function setCMovieCategory(string $movieCategory): void
    {
        $movieCategory = Utilities::cleanData($movieCategory);
        parent::setMovieCategory($movieCategory);
    }

    protected function setCMovieDescription(string $movieDescription): void
    {
        $movieDescription = Utilities::cleanData($movieDescription);
        parent::setMovieDescription($movieDescription);
    }

    protected function setCMovieDirector(string $movieDirector): void
    {
        $movieDirector = Utilities::cleanData($movieDirector);
        parent::setMovieDirector($movieDirector);
    }

    protected function setCMovieDuration(int $movieDuration): void
    {
        $movieDuration = Utilities::cleanData($movieDuration);
        parent::setMovieDuration($movieDuration);
    }

    protected function setCMovieInterview(string $movieInterview): void
    {

        $movieInterview = Utilities::cleanData($movieInterview);
        parent::setMovieInterview($movieInterview);
    }

    protected function setCMovieLargeArtCover(string $movieLargeArtCover): void
    {
        $movieLargeArtCover = Utilities::cleanData($movieLargeArtCover);
        parent::setMovieLargeArtCover($movieLargeArtCover);
    }

    protected function setCMovieName(string $movieName): void
    {
        $movieName = Utilities::cleanData($movieName);
        parent::setMovieName($movieName);
    }

    protected function setCMoviePremieredCountry(string $moviePremieredCountry): void
    {
        $moviePremieredCountry = Utilities::cleanData($moviePremieredCountry);
        parent::setMoviePremieredCountry($moviePremieredCountry);
    }

    protected function setCMovieStills(string $movieStills): void
    {
        $movieStills = Utilities::cleanData($movieStills);
        parent::setMovieStills($movieStills);

    }

    protected function setCMovieRating(float $movieRating): void
    {
        $movieRating = Utilities::cleanData($movieRating);
        parent::setMovieRating($movieRating);

    }

    protected function setCMovieSmallArtCover(string $movieSmallArtCover): void
    {
        $movieSmallArtCover = Utilities::cleanData($movieSmallArtCover);
        parent::setMovieSmallArtCover($movieSmallArtCover);
    }

    protected function setCMovieStoryline(string $movieStoryline): void
    {
        $movieStoryline = Utilities::cleanData($movieStoryline);
        parent::setMovieStoryline($movieStoryline);
    }

    protected function setCMovieTrailer(string $movieTrailer): void
    {
        $movieTrailer = Utilities::cleanData($movieTrailer);
        parent::setMovieTrailer($movieTrailer);
    }

    protected function setMovieType(string $movieType): void
    {
        $movieType = Utilities::cleanData($movieType);
        parent::setMovieType($movieType);
    }

    protected function setCMovieUrl(string $movieUrl): void
    {
        $movieUrl = Utilities::cleanData($movieUrl);
        parent::setMovieUrl($movieUrl);
    }

    protected function setCSearchTerm(string $searchTerm): void
    {
        $searchTerm = Utilities::cleanData($searchTerm);
        parent::setSearchTerm($searchTerm);
    }
}