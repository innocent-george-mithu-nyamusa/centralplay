<?php


namespace Classes;

use DateTime;
use Exception;
use PDO;

class Movie extends Dbh
{
    private string $movieId;
    private string $movieName;
    private string $movieRating;
    private DateTime $moviePremieredDate;
    private int $movieDuration;
    private string $movieType;
    private string $movieSmallArtCover;
    private string $movieLargeArtCover;
    private string $movieInterview;
    private string $movieStills;
    private string $movieDescription;
    private string $movieDirector;
    private string $movieTrailer;
    private string $movieUrl;
    private string $moviePremieredCountry;
    private string $movieStoryline;
    private string $movieCategory;

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
     * @return string
     */
    protected function getMovieId(): string
    {
        return $this->movieId;
    }

    /**
     * @param string $movieCategory
     */
    protected function setMovieCategory(string $movieCategory): void
    {
        $this->movieCategory = $movieCategory;
    }

    /**
     * @param string $movieStoryline
     */
    protected function setMovieStoryline(string $movieStoryline): void
    {
        $this->movieStoryline = $movieStoryline;
    }

    /**
     * @param string $moviePremieredCountry
     */
    protected function setMoviePremieredCountry(string $moviePremieredCountry): void
    {
        $this->moviePremieredCountry = $moviePremieredCountry;
    }

    /**
     * @param string $movieUrl
     */
    protected function setMovieUrl(string $movieUrl): void
    {
        $this->movieUrl = $movieUrl;
    }

    /**
     * @param string $movieTrailer
     */
    protected function setMovieTrailer(string $movieTrailer): void
    {
        $this->movieTrailer = $movieTrailer;
    }

    /**
     * @param string $movieDirector
     */
    protected function setMovieDirector(string $movieDirector): void
    {
        $this->movieDirector = $movieDirector;
    }

    /**
     * @param string $movieDescription
     */
    protected function setMovieDescription(string $movieDescription): void
    {
        $this->movieDescription = $movieDescription;
    }

    /**
     * @param string $movieStills
     */
    protected function setMovieStills(string $movieStills): void
    {
        $this->movieStills = $movieStills;
    }

    /**
     * @param string $movieInterview
     */
    protected function setMovieInterview(string $movieInterview): void
    {
        $this->movieInterview = $movieInterview;
    }

    /**
     * @param string $movieLargeArtCover
     */
    protected function setMovieLargeArtCover(string $movieLargeArtCover): void
    {
        $this->movieLargeArtCover = $movieLargeArtCover;
    }

    /**
     * @param string $movieSmallArtCover
     */
    protected function setMovieSmallArtCover(string $movieSmallArtCover): void
    {
        $this->movieSmallArtCover = $movieSmallArtCover;
    }

    /**
     * @param int $movieDuration
     */
    protected function setMovieDuration(int $movieDuration): void
    {
        $this->movieDuration = $movieDuration;
    }

    /**
     * @param string $movieType
     */
    protected function setMovieType(string $movieType): void
    {
        $this->movieType = $movieType;
    }

    /**
     * @param DateTime $moviePremieredDate
     */
    protected function setMoviePremieredDate(DateTime $moviePremieredDate): void
    {
        $this->moviePremieredDate = $moviePremieredDate;
    }

    /**
     * @param string $movieRating
     */
    protected function setMovieRating(string $movieRating): void
    {
        $this->movieRating = $movieRating;
    }

    /**
     * @param string $movieName
     */
    protected function setMovieName(string $movieName): void
    {
        $this->movieName = $movieName;
    }

    /**
     * @param string $movieId
     */
    protected function setMovieId(string $movieId): void
    {
        $this->movieId = $movieId;
    }

    /**
     * @return bool
     */
    protected function createMovieResult(): bool
    {
        return $this->createMovie();
    }

    private function createMovie(): bool
    {

        try {
            $createItemQuery = 'INSERT INTO movie(
                  movie_id, 
                  movie_name, 
                  movie_rating, 
                  movie_premiered_date, 
                  movie_duration, 
                  movie_type, 
                  movie_small_art_cover, 
                  movie_large_art_cover, 
                  movie_interview, 
                  movie_stills, 
                  movie_decription, 
                  movie_director, 
                  movie_trailer, 
                  movie_url, 
                  movie_premiered_country, 
                  movie_storyline,
                  movie_category
                 ) VALUES(
                          :movieId,
                           :movieName,
                           :movieRating,
                           :moviePremieredDate,
                           :movieDuration,
                           :movieType,
                           :movieSmallArtCover,
                           :movieLargeArtCover,
                           :movieInterview,
                           :movieStills,
                           :movieDescription,
                           :movieDirector,
                           :movieTrailer,
                          :movieUrl,
                          :moviePremieredCountry,
                          :movieStoryline,
                          :movieCategory
       )';


            $createMovieStmt = $this->connect()->prepare($createItemQuery);
            $createMovieStmt->bindParam(':movieId', $this->movieId);
            $createMovieStmt->bindParam(':movieName', $this->movieName);
            $createMovieStmt->bindParam(':movieRating', $this->movieRating);
            $createMovieStmt->bindParam(':moviePremieredDate', $this->moviePremieredDate);
            $createMovieStmt->bindParam(':movieDuration', $this->movieDuration);
            $createMovieStmt->bindParam(':movieType', $this->movieType);
            $createMovieStmt->bindParam(':movieSmallArtCover', $this->movieSmallArtCover);
            $createMovieStmt->bindParam(':movieSmallArtCover', $this->movieSmallArtCover);
            $createMovieStmt->bindParam(':movieLargeArtCover', $this->movieLargeArtCover);
            $createMovieStmt->bindParam(':movieInterview', $this->movieInterview);
            $createMovieStmt->bindParam(':movieStills', $this->movieStills);
            $createMovieStmt->bindParam(':movieDescription', $this->movieDescription);
            $createMovieStmt->bindParam(":movieDirector", $this->movieDirector);
            $createMovieStmt->bindParam(':movieTrailer', $this->movieTrailer);
            $createMovieStmt->bindParam(':movieUrl', $this->movieUrl);
            $createMovieStmt->bindParam(":moviePremieredCountry", $this->moviePremieredCountry);
            $createMovieStmt->bindParam(":movieStoryline", $this->movieStoryline);
            $createMovieStmt->bindParam(":movieCategory", $this->movieCategory);
            $result = $createMovieStmt->execute();
            $createMovieStmt->closeCursor();

            return $result;

        } catch (Exception $exception) {
            
            echo "Failed to create Movie :\n" . $exception->getMessage();
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

    protected function getNumberOfMoviesInCategoryResult() :int|null {
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

    protected function getMovieStatus(): array|null {
        return $this->getMovie();
    }
    private function getMovie(): array|null {
        try {
            $getMovieQuery = "SELECT * FROM movie WHERE movie_id=:movieId";
            $getMovieStmt = $this->connect()->prepare($getMovieQuery);
            $getMovieStmt->bindParam(":movieId", $this->movieId);
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

