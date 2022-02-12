<?php


namespace Classes;

use DateTime;
use Exception;
use PDO;

class Episode extends Dbh
{
    private string $episodeId;
    private string $episodeName;
    private string $episodeRating;
    private DateTime $episodePremieredDate;
    private int $episodeDuration;
    private int $episodeNumberInSeries;
    private string $episodeSmallArtCover;
    private string $episodeLargeArtCover;
    private string $episodeDescription;
    private string $episodeDirector;
    private string $episodeUrl;
    private string $episodeActorsImages;
    private string $episodePremieredCountry;
    private string $episodeStoryline;
    private string $episodeSeriesId;

//    /**
//     * @return array|null
//     */
//    protected function AllUnclaimedItems(): ?array
//    {
//        return $this->getAllUnclaimedItems();
//    }
//
//    /**
//     * @return array|null
//     */
//    private function getAllUnclaimedItems(): ?array
//    {
//        try {
//            $allUnclaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='unclaimed'";
//            $allUnclaimedItemsStmt = $this->connect()->prepare($allUnclaimedItemsQuery);
//            $allUnclaimedItemsStmt->execute();
//            return $allUnclaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
//        } catch (Exception $exception) {
//            echo "Failed to get Unclaimed items\n" . $exception->getMessage();
//            return null;
//        }
//
//    }
//
//    protected function AllNewUnclaimedItems(): ?array
//    {
//        return $this->getAllNewUnclaimedItems();
//    }
//
//    private function getAllNewUnclaimedItems(): ?array
//    {
//        try {
//            $allUnclaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='unclaimed' ORDER BY item_no DESC LIMIT 8";
//            $allUnclaimedItemsStmt = $this->connect()->prepare($allUnclaimedItemsQuery);
//            $allUnclaimedItemsStmt->execute();
//            return $allUnclaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
//        } catch (Exception $exception) {
//            echo "Failed to get Unclaimed items\n" . $exception->getMessage();
//            return null;
//        }
//
//    }
//
//    /**
//     * @return array|null
//     */
//    protected function AllClaimedItems(): ?array
//    {
//        return $this->getAllClaimedItems();
//    }
//
//    /**
//     * @return array|null
//     */
//    private function getAllClaimedItems(): ?array
//    {
//        try {
//            $allClaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='claimed'";
//            $allClaimedItemsStmt = $this->connect()->prepare($allClaimedItemsQuery);
//            $allClaimedItemsStmt->execute();
//            return $allClaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
//        } catch (Exception $exception) {
//            echo "Failed to get claimed items\n" . $exception->getMessage();
//            return null;
//        }
//
//    }
//
//    protected function getSingeItem(): ?array
//    {
//        return $this->getItem();
//    }
//
//    /**
//     * @return array|null
//     */
//    private function getItem(): ?array
//    {
//        try {
//            $singleItemQuery = "SELECT * FROM lost_item WHERE item_id=:id";
//            $singleItemStmt = $this->connect()->prepare($singleItemQuery);
//            $singleItemStmt->bindParam(":id", $this->itemId);
//            $singleItemStmt->execute();
//            return $singleItemStmt->fetchAll(PDO::FETCH_ASSOC);
//
//        } catch (Exception $exception) {
//            echo "Failed to get claimed items\n" . $exception->getMessage();
//            return null;
//        }
//    }
//
//    /**
//     * @return array|null
//     */
//    protected function AllItems(): ?array
//    {
//        return $this->getAllItems();
//    }
//
//    /**
//     * @return array|null
//     */
//    private function getAllItems(): ?array
//    {
//        try {
//            $allClaimedItemsQuery = "SELECT * FROM lost_item";
//            $allClaimedItemsStmt = $this->connect()->prepare($allClaimedItemsQuery);
//            $allClaimedItemsStmt->execute();
//            return $allClaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
//
//        } catch (Exception $exception) {
//            echo "Failed to get all results:\n" . $exception->getMessage();
//            return null;
//        }
//
//    }
    /**
     * @param string $episodeActorsImages
     */
    protected function setEpisodeActorsImages(string $episodeActorsImages): void
    {
        $this->episodeActorsImages = $episodeActorsImages;
    }

    /**
     * @param string $episodeRating
     */
    protected function setEpisodeRating(string $episodeRating): void
    {
        $this->episodeRating = $episodeRating;
    }


    /**
     * @return string
     */
    protected function getEpisodeId(): string
    {
        return $this->episodeId;
    }

    /**
     * @param string $episodeSeriesId
     */
    protected function setEpisodeSeriesId(string $episodeSeriesId): void
    {
        $this->episodeSeriesId = $episodeSeriesId;
    }

    /**
     * @param string $episodeStoryline
     */
    protected function setEpisodeStoryline(string $episodeStoryline): void
    {
        $this->episodeStoryline = $episodeStoryline;
    }

    /**
     * @param string $episodePremieredCountry
     */
    protected function setEpisodePremieredCountry(string $episodePremieredCountry): void
    {
        $this->episodePremieredCountry = $episodePremieredCountry;
    }

    /**
     * @param string $episodeUrl
     */
    protected function setEpisodeUrl(string $episodeUrl): void
    {
        $this->episodeUrl = $episodeUrl;
    }

    /**
     * @param string $episodeDirector
     */
    protected function setEpisodeDirector(string $episodeDirector): void
    {
        $this->episodeDirector = $episodeDirector;
    }

    /**
     * @param string $episodeDescription
     */
    protected function setEpisodeDescription(string $episodeDescription): void
    {
        $this->episodeDescription = $episodeDescription;
    }

    /**
     * @param string $episodeLargeArtCover
     */
    protected function setEpisodeLargeArtCover(string $episodeLargeArtCover): void
    {
        $this->episodeLargeArtCover = $episodeLargeArtCover;
    }

    /**
     * @param string $episodeSmallArtCover
     */
    protected function setEpisodeSmallArtCover(string $episodeSmallArtCover): void
    {
        $this->episodeSmallArtCover = $episodeSmallArtCover;
    }

    /**
     * @param int $episodeDuration
     */
    protected function setEpisodeDuration(int $episodeDuration): void
    {
        $this->episodeDuration = $episodeDuration;
    }

    /**
     * @param int $episodeNumberInSeries
     */
    protected function setEpisodeNumberInSeries(int $episodeNumberInSeries): void
    {
        $this->episodeNumberInSeries = $episodeNumberInSeries;
    }

    /**
     * @param DateTime $episodePremieredDate
     */
    protected function setEpisodePremieredDate(DateTime $episodePremieredDate): void
    {
        $this->episodePremieredDate = $episodePremieredDate;
    }


    /**
     * @param string $episodeName
     */
    protected function setEpisodeName(string $episodeName): void
    {
        $this->episodeName = $episodeName;
    }

    /**
     * @param string $episodeId
     */
    protected function setEpisodeId(string $episodeId): void
    {
        $this->episodeId = $episodeId;
    }

    /**
     * @return bool
     */
    protected function createEpisodeResult(): bool
    {
        return $this->createEpisode();
    }

    private function createEpisode(): bool
    {

        try {
            $createItemQuery = 'INSERT INTO episode(
                    episode_id, 
                    episode_series_id, 
                    episode_number_in_series, 
                    episode_name, 
                    episode_rating, 
                    episode_premiered_date, 
                    episode_duration, 
                    episode_small_art_cover, 
                    episode_large_art_cover, 
                    episode_description, 
                    episode_actors_images, 
                    episode_director, 
                    episode_url, 
                    episode_premiered_country, 
                    epsode_storyline
                    ) VALUES(
                          :episodeId,
                          :episodeSeriesId,
                           :episodeNumberInSeries,
                           :episodeName,
                           :episodeRating,
                           :episodePremieredDate,
                           :episodeDuration,
                           :episodeSmallArtCover,
                           :episodeLargeArtCover,
                            :episodeDescription,
                           :episodeActorsImages,
                           :episodeDirector,
                          :episodeUrl,
                          :episodePremieredCountry,
                          :episodeStoryline
       )';


            $createEpisodeStmt = $this->connect()->prepare($createItemQuery);
            $createEpisodeStmt->bindParam(':episodeId', $this->episodeId);
            $createEpisodeStmt->bindParam(":episodeSeriesId", $this->episodeSeriesId);
            $createEpisodeStmt->bindParam(':episodeName', $this->episodeName);
            $createEpisodeStmt->bindParam(':episodeRating', $this->episodeRating);
            $createEpisodeStmt->bindParam(':episodePremieredDate', $this->episodePremieredDate);
            $createEpisodeStmt->bindParam(':episodeDuration', $this->episodeDuration);
            $createEpisodeStmt->bindParam(':episodeNumberInSeries', $this->episodeNumberInSeries);
            $createEpisodeStmt->bindParam(':episodeSmallArtCover', $this->episodeSmallArtCover);
            $createEpisodeStmt->bindParam(':episodeSmallArtCover', $this->episodeSmallArtCover);
            $createEpisodeStmt->bindParam(':episodeLargeArtCover', $this->episodeLargeArtCover);
            $createEpisodeStmt->bindParam(':episodeDescription', $this->episodeDescription);
            $createEpisodeStmt->bindParam(':episodeActorsImages', $this->episodeActorsImages);
            $createEpisodeStmt->bindParam(":episodeDirector", $this->episodeDirector);
            $createEpisodeStmt->bindParam(':episodeUrl', $this->episodeUrl);
            $createEpisodeStmt->bindParam(":episodePremieredCountry", $this->episodePremieredCountry);
            $createEpisodeStmt->bindParam(":episodeStoryline", $this->episodeStoryline);

            $result = $createEpisodeStmt->execute();
            $createEpisodeStmt->closeCursor();

            return $result;

        } catch (Exception $exception) {
            
            echo "Failed to create Episode :\n" . $exception->getMessage();
            return false;
        }
    }

    /**
     * @return bool
     */
    protected function episodeUpdateResult(): bool
    {
        return $this->updateEpisode();
    }

    /**
     * @return bool
     */
    private function updateEpisode(): bool
    {
        try {
            $updateItemQuery = "UPDATE episode
                            SET 
                                episode_name=?,
                    episode_number_in_series=?, 
                    episode_rating=?, 
                    episode_premiered_date=?, 
                    episode_duration=?, 
                    episode_small_art_cover=?, 
                    episode_large_art_cover=?, 
                    episode_description=?, 
                    episode_actors_images=?, 
                    episode_director=?, 
                    episode_url=?, 
                    episode_premiered_country=?, 
                    epsode_storyline=?
                            WHERE episode_id = ?;
                            ";
            $updateItemStmt = $this->connect()->prepare($updateItemQuery);
            $updateItemStmt->bindValue(
                "sissi", array(
                    $this->episodeName,
                    $this->episodeNumberInSeries,
                    $this->episodeRating,
                    $this->episodePremieredDate,
                    $this->episodeDuration,
                    $this->episodeSmallArtCover,
                    $this->episodeLargeArtCover,
                    $this->episodeDescription,
                    $this->episodeDirector,
                    $this->episodeUrl,
                    $this->episodePremieredCountry,
                    $this->episodeStoryline
                )
            );
            $result = $updateItemStmt->execute();
            $updateItemStmt->closeCursor();

            return $result;
        } catch (Exception $exception) {

            echo "Failed to update Movie: \n" . $exception->getMessage();
            return false;
        }

    }

    protected function deleteMovieResult(): ?bool
    {
        return $this->deleteMovie();
    }

    private function deleteMovie(): ?bool
    {
        try {
            $singleMovieDeleteQuery = "DELETE FROM movie WHERE movie_id=:id";
            $singleMovieDeleteStmt = $this->connect()->prepare($singleMovieDeleteQuery);
            $singleMovieDeleteStmt->bindParam(":id", $this->episodeId);
            $result = $singleMovieDeleteStmt->execute();
            $singleMovieDeleteStmt->closeCursor();
            return $result;

        } catch (Exception $exception) {
            echo "Failed to delete movie \n" . $exception->getMessage();
            return null;
        }
    }

    protected function deleteAllMoviesResult(): ?bool
    {
        return $this->deleteAllMovies();
    }

    private function deleteAllMovies(): ?bool
    {
        try {
            $allItemsDeleteQuery = "DELETE FROM movie";
            $allItemsDeleteStmt = $this->connect()->prepare($allItemsDeleteQuery);
            return $allItemsDeleteStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to get delete item\n" . $exception->getMessage();
            return null;
        }

    }

    protected function getNumberOfMoviesInCategoryResult() :int|null {
        return $this->getNumberOfMoviesInCategory();
    }
    private function getNumberOfMoviesInCategory(): bool|int
    {

        try {
            $movieNumberQuery = "SELECT COUNT(movie_id) FROM movie WHERE movie_category=:category_id";
            $movieNumberStmt = $this->connect()->prepare($movieNumberQuery);
            $movieNumberStmt->bindParam(":category_id", $this->episodeSeriesId);
            $movieNumberStmt->execute();
            $results = $movieNumberStmt->fetchColumn();
            $movieNumberStmt->closeCursor();
            return $results;

        } catch (Exception $exception) {
            echo "Failed to get number of movies in category" . $exception->getMessage();
            return false;
        }

    }

    protected function getFewCategoryMoviesResult(): bool|array
    {
        return $this->getFewCategoryMovies();
    }

    private function getFewCategoryMovies(): bool|array
    {
        try {
            $getCategoryMoviesQuery = "SELECT * FROM movie WHERE movie_category=:catId LIMIT 4";
            $getCategoryMoviesStmt = $this->connect()->prepare($getCategoryMoviesQuery);
            $getCategoryMoviesStmt->bindParam(":catId", $this->episodeSeriesId);
            $getCategoryMoviesStmt->execute();
            $results = $getCategoryMoviesStmt->fetchAll(PDO::FETCH_ASSOC);
            $getCategoryMoviesStmt->closeCursor();
            return $results;

        } catch (Exception $exception) {
            echo "Failed to get movies in category" . $exception->getMessage();
            return false;
        }
    }

    protected function getAllCategoryMoviesResult(): bool|array
    {
        return $this->getAllCategoryMovies();
    }

    private function getAllCategoryMovies(): bool|array
    {
        try {
            $getCategoryMovieQuery = "SELECT * FROM movie WHERE movie_category=:catId";
            $getCategoryMovieStmt = $this->connect()->prepare($getCategoryMovieQuery);
            $getCategoryMovieStmt->bindParam(":catId", $this->episodeSeriesId);
            $getCategoryMovieStmt->execute();
            $results = $getCategoryMovieStmt->fetchAll(PDO::FETCH_ASSOC);
            $getCategoryMovieStmt->closeCursor();
            return $results;
        } catch (Exception $exception) {
            echo "Failed to get items in category" . $exception->getTraceAsString();
            return false;
        }
    }

    protected function getMovieStatus(): array|null {
        return $this->getMovie();
    }
    private function getMovie(): array|null {
        try {
            $getMovieQuery = "SELECT * FROM movie WHERE movie_id=:movieId";
            $getMovieStmt = $this->connect()->prepare($getMovieQuery);
            $getMovieStmt->bindParam(":movieId", $this->episodeId);
            $getMovieStmt->execute();
            $result = $getMovieStmt->fetchAll(PDO::FETCH_ASSOC);
            $getMovieStmt->closeCursor();
            return $result[0];
        }catch (Exception $exception){
            echo "failed to get Movie ". $exception->getMessage();
            return null;
        }
    }

}

