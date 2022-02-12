<?php


namespace Classes;

use Exception;
use PDO;

class Series extends Dbh
{
    private string $seriesId;
    private string $seriesName;
    private int $seriesDuration;
    private string $seriesType;
    private string $seriesRating;
    private string $seriesDirector;

    /**
     * @param string $seriesDirector
     */
    protected function setSeriesDirector(string $seriesDirector): void
    {
        $this->seriesDirector = $seriesDirector;
    }

    /**
     * @param string $seriesRating
     */
    protected function setSeriesRating(string $seriesRating): void
    {
        $this->seriesRating = $seriesRating;
    }

    /**
     * @param string $seriesType
     */
    protected function setSeriesType(string $seriesType): void
    {
        $this->seriesType = $seriesType;
    }

    /**
     * @param int $seriesDuration
     */
    protected function setSeriesDuration(int $seriesDuration): void
    {
        $this->seriesDuration = $seriesDuration;
    }

    /**
     * @param string $seriesId
     */
    protected function setSeriesId(string $seriesId): void
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @param string $seriesName
     */
    protected function setSeriesName(string $seriesName): void
    {
        $this->seriesName = $seriesName;
    }


    /**
     * @return bool
     */
    protected function createSeriesResult(): bool
    {
        return $this->createSeries();
    }

    private function createSeries(): bool
    {

        try {
            $createItemQuery = 'INSERT INTO series(
                 series_id, 
                   series_name, 
                   series_type, 
                   series_duration, 
                   series_rating, 
                   series_director
                 ) VALUES(
                          :seriesId,
                           :seriesName,
                          :seriesType,
                            :seriesDuration,
                           :seriesRating,
                           :seriesDirector
       )';


            $createSeriesStmt = $this->connect()->prepare($createItemQuery);
            $createSeriesStmt->bindParam(':seriesId', $this->seriesId);
            $createSeriesStmt->bindParam(':seriesName', $this->seriesName);
            $createSeriesStmt->bindParam(':seriesType', $this->seriesType);
            $createSeriesStmt->bindParam(':seriesDuration', $this->seriesDuration);
            $createSeriesStmt->bindParam(':seriesRating', $this->seriesRating);
            $createSeriesStmt->bindParam(':seriesDirector', $this->seriesDirector);

            $result = $createSeriesStmt->execute();
            $createSeriesStmt->closeCursor();

            return $result;

        } catch (Exception $exception) {

            echo "Failed to create Series :\n" . $exception->getMessage();
            return false;
        }
    }

    /**
     * @return bool
     */
    protected function movieUpdateResult(): bool
    {
        return $this->updateMovie();
    }

    /**
     * @return bool
     */
    private function updateMovie(): bool
    {
        try {
            $updateItemQuery = "UPDATE movie
                            SET 
                                movie_name=?,
                                movie_rating=?,
                                movie_premiered_date=?,
                                movie_duration=?,
                                movie_type=?,
                                movie_small_art_cover=?,
                                movie_large_art_cover=?,
                                movie_interview=?,
                                movie_stills=?,
                                movie_decription=?,
                                movie_director=?,
                                movie_trailer=?,
                                movie_url=?,
                                movie_premiered_country=?,
                                movie_storyline=?
                            WHERE movie_id = ?;
                            ";
            $updateItemStmt = $this->connect()->prepare($updateItemQuery);
            $updateItemStmt->bindValue(
                "sssissssssssss", array(
                    $this->movieName,
                    $this->movieRating,
                    $this->moviePremieredDate,
                    $this->movieDuration,
                    $this->movieType,
                    $this->movieSmallArtCover,
                    $this->movieLargeArtCover,
                    $this->movieInterview,
                    $this->movieStills,
                    $this->movieDescription,
                    $this->movieDirector,
                    $this->movieUrl,
                    $this->moviePremieredCountry,
                    $this->movieStoryline
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
            $singleMovieDeleteStmt->bindParam(":id", $this->movieId);
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

    protected function getNumberOfMoviesInCategoryResult(): int|null
    {
        return $this->getNumberOfMoviesInCategory();
    }

    private function getNumberOfMoviesInCategory(): bool|int
    {

        try {
            $movieNumberQuery = "SELECT COUNT(movie_id) FROM movie WHERE movie_category=:category_id";
            $movieNumberStmt = $this->connect()->prepare($movieNumberQuery);
            $movieNumberStmt->bindParam(":category_id", $this->movieCategory);
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
            $getCategoryMoviesStmt->bindParam(":catId", $this->movieCategory);
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
            $getCategoryMovieStmt->bindParam(":catId", $this->movieCategory);
            $getCategoryMovieStmt->execute();
            $results = $getCategoryMovieStmt->fetchAll(PDO::FETCH_ASSOC);
            $getCategoryMovieStmt->closeCursor();
            return $results;
        } catch (Exception $exception) {
            echo "Failed to get items in category" . $exception->getTraceAsString();
            return false;
        }
    }

    protected function getMovieStatus(): array|null
    {
        return $this->getMovie();
    }

    private function getMovie(): array|null
    {
        try {
            $getMovieQuery = "SELECT * FROM movie WHERE movie_id=:movieId";
            $getMovieStmt = $this->connect()->prepare($getMovieQuery);
            $getMovieStmt->bindParam(":movieId", $this->movieId);
            $getMovieStmt->execute();
            $result = $getMovieStmt->fetchAll(PDO::FETCH_ASSOC);
            $getMovieStmt->closeCursor();
            return $result[0];
        } catch (Exception $exception) {
            echo "failed to get Movie " . $exception->getMessage();
            return null;
        }
    }

}

