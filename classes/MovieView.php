<?php


namespace Classes;

class MovieView extends MovieContr
{

    public function createMovie(
        string $movieSmallArtImage,
        $movieSmallArtImageTemp,
        string $movieLargeArtImage,
               $movieLargeArtImageTemp,
        string $movieCategory,
        string $movieDescription,
        string $movieDirector,
        int    $movieDuration,
        string $interviewUrl,
        string $movieName,
        string $premieredCountry,
        string $movieRating,
        string $movieStillUrl,
        string $movieTrailerUrl,

    ): bool
    {
        $smallArtImage = Utilities::uploadPhoto($movieSmallArtImage, $movieSmallArtImageTemp, "movie_image_small");
        if (!$smallArtImage) {
            $smallArtImage = $movieSmallArtImage;
        }

        $largeArtImage = Utilities::uploadPhoto($movieSmallArtImage, $movieLargeArtImageTemp, "movie_image_small");
        if (!$largeArtImage) {
            $largeArtImage = $movieLargeArtImage;
        }
        $this->setCMovieId();
        $this->setCMovieSmallArtCover($smallArtImage);
        $this->setCMovieLargeArtCover($largeArtImage);
        $this->setMovieCategory($movieCategory);
        $this->setCMovieDescription($movieDescription);
        $this->setCMovieDirector($movieDirector);
        $this->setCMovieDuration($movieDuration);
        $this->setCMovieInterview($interviewUrl);
        $this->setCMovieName($movieName);
        $this->setMoviePremieredCountry($premieredCountry);
        $this->setCMovieRating($movieRating);
        $this->setCMovieStills($movieStillUrl);
        $this->setCMovieTrailer($movieTrailerUrl);

        return $this->createMovieResult();
    }


    public function updateItem(
        string $movieId,
        string $oldSmallMovieArtImage,
        string $oldLargeMovieArtImage,
        string $movieSmallArtImage,
        $movieSmallArtImageTemp,
        string $movieLargeArtImage,
               $movieLargeArtImageTemp,
        string $movieCategory,
        string $movieDescription,
        string $movieDirector,
        int    $movieDuration,
        string $interviewUrl,
        string $movieName,
        string $premieredCountry,
        string $movieRating,
        string $movieStillUrl,
        string $movieTrailerUrl
    ): ?bool
    {
        Utilities::deletePhoto($oldSmallMovieArtImage, "movie_image_small");
        Utilities::deletePhoto($oldLargeMovieArtImage, "movie_image_large");

        $smallArtImage = Utilities::uploadPhoto($movieSmallArtImage, $movieSmallArtImageTemp, "movie_image_small");
        if (!$smallArtImage) {
            $smallArtImage = $movieSmallArtImage;
        }

        $largeArtImage = Utilities::uploadPhoto($movieSmallArtImage, $movieLargeArtImageTemp, "movie_image_small");
        if (!$largeArtImage) {
            $largeArtImage = $movieLargeArtImage;
        }

        $this->addMovieId($movieId);
        $this->setCMovieSmallArtCover($smallArtImage);
        $this->setCMovieLargeArtCover($largeArtImage);
        $this->setMovieCategory($movieCategory);
        $this->setCMovieDescription($movieDescription);
        $this->setCMovieDirector($movieDirector);
        $this->setCMovieDuration($movieDuration);
        $this->setCMovieInterview($interviewUrl);
        $this->setCMovieName($movieName);
        $this->setMoviePremieredCountry($premieredCountry);
        $this->setCMovieRating($movieRating);
        $this->setCMovieStills($movieStillUrl);
        $this->setCMovieTrailer($movieTrailerUrl);

        return $this->movieUpdateResult();
    }

    public function getMovie($id): ?array
    {
        return parent::getMovieStatus();
    }

    public function getMovieId(): string {
        return parent::getMovieId();
    }

    public function getUnclaimedItems(): ?array
    {
        return $this->checkAllUnclaimedItems();
    }

    public function getAllNewUnclaimedItems(): ?array
    {
        return $this->checkAllNewUnclaimedItems();
    }

    public function getAllClaimedItems(): ?array
    {
        return $this->checkAllClaimedItems();
    }

    public function getAllItems(): ?array
    {
        return $this->checkAllItems();
    }

    public function getItem(string $id): ?array
    {
        $this->itemAddId($id);
        return $this->getSingeItem();
    }

    public function deleteItem(string $id): ?bool
    {
        $this->itemAddId($id);
        return $this->deleteMovieResult();
    }

    public function deleteAllItems(): ?bool
    {
        return $this->deleteAllMoviesResult();
    }

    public function getAllCategoryItems(string $catId): bool|array
    {
        $this->addItemCategory($catId);
        return $this->getAllCategoryMoviesResult();
    }

    public function getFewCategoryItems(string $catId): bool|array
    {
        $this->addItemCategory($catId);
        return $this->getFewCategoryMoviesResult();
    }

    public function getUserCreatedItems(string $creatorId): ?array
    {
        $this->setCreaterId($creatorId);
        return parent::getUserCreatedItemsStatus();
    }

    public function getNumberOfItemsAddedByUser(string $createrId): int
    {
        $this->setCreaterId($createrId);
        return parent::getNumberOfItemsAddedByUserStatus();
    }

    public function searchResults(string $searchTerm): ?array
    {
        $this->setCSearchTerm($searchTerm);
        return parent::searchItemUnclaimedStatus();
    }
}