<?php

class SongsPlaylist
{
    /**
     * @var Song[] $songsList
     */
    private $songsList;

    /**
     * @param Song $song
     */
    public function addSong(Song $song): void
    {
        $this->songsList[] = $song;
    }

    private function getCountOfSongs()
    {
        return count($this->songsList);
    }

    private function getTotalMinutes()
    {
        $totalMins = 0;
        /** @var Song $song */
        foreach($this->songsList as $song) {
            $timeData = explode(':', $song->getSongLength());
            $minutes = $timeData[0];
            $totalMins += $minutes;
        }

        return $totalMins;
    }

    private function getTotalSeconds()
    {
        $totalSeconds = 0;
        /** @var Song $song */
        foreach($this->songsList as $song) {
            $timeData = explode(':', $song->getSongLength());
            $seconds = $timeData[1];
            $totalSeconds += $seconds;
        }

        return $totalSeconds;
    }

    private function getPlaylistLength()
    {
        $seconds = $this->getTotalSeconds();
        $bonusMins = 0;
        if($seconds > 59) {
            $bonusMins = floor($seconds / 60);
            $seconds = $seconds % 60;
        }

        $minutes = $this->getTotalMinutes() + $bonusMins;
        $bonusHours = 0;
        if($minutes > 59) {
            $bonusHours = floor($minutes / 60);
            $minutes = $minutes % 60;
        }

        $hours = $bonusHours;

        $zSec = '';
        if($seconds < 10) {
            $zSec = 0;
        }
        $zMin = '';
        if($zMin < 10) {
            $zMin = 0;
        }
        return $hours . 'h ' .
               $zMin . $minutes . "m " .
               $zSec . $seconds . "s";
    }

    public function __toString()
    {
        return "Songs added: {$this->getCountOfSongs()}" . PHP_EOL .
                "Playlist length: {$this->getPlaylistLength()}";
    }
}

class Song
{
    private $artistName;
    private $songName;
    private $songLength;

    /**
     * Song constructor.
     * @param $artistName
     * @param $songName
     * @param $songLength
     * @throws InvalidArtistNameException
     */
    public function __construct($artistName, $songName, $songLength)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setSongLength($songLength);
    }

    /**
     * @param $artistName
     * @throws InvalidArtistNameException
     */
    private function setArtistName($artistName)
    {
        if(strlen($artistName) < 3 || strlen($artistName) > 20) {
            throw new InvalidArtistNameException("Artist name should be between 3 and 20 symbols." . PHP_EOL);
        }
        $this->artistName = $artistName;
    }

    /**
     * @param $songName
     * @throws InvalidSongNameException
     */
    private function setSongName($songName)
    {
        if(strlen($songName) < 3 || strlen($songName) > 30) {
            throw new InvalidSongNameException("Song name should be between 3 and 30 symbols." . PHP_EOL);
        }
        $this->songName = $songName;
    }

    /**
     * @param $songLenght
     * @throws InvalidSongLengthException
     */
    private function setSongLength($songLenght)
    {
        $songTimeData = explode(':', $songLenght);
        list($songMinutes, $songSeconds) = $songTimeData;

        if($songMinutes < 0 || $songMinutes > 14) {
            throw new InvalidSongMinutesException("Song minutes should be between 0 and 14." . PHP_EOL);
        }

        if($songSeconds < 0 || $songSeconds > 59) {
            throw new InvalidSongSecondsException("Song seconds should be between 0 and 59." . PHP_EOL);
        }
        $this->songLength = $songLenght;
    }

    public function getSongLength()
    {
        return $this->songLength;
    }
}

class InvalidSongException extends Exception {}
    class InvalidArtistNameException extends InvalidSongException {}
    class InvalidSongNameException extends InvalidArtistNameException {}
    class InvalidSongLengthException extends InvalidSongNameException {}
        class InvalidSongMinutesException extends InvalidSongLengthException {}
        class InvalidSongSecondsException extends InvalidSongLengthException {}


$numSongs = readline();

$songs = new SongsPlaylist;
for($i = 0; $i < $numSongs; $i++) {
    $songInfo = explode(';', readline());
    list($artistName, $songName, $length) = $songInfo;

    try {
        $song = new Song($artistName, $songName, $length);
        $songs->addSong($song);
        echo "Song added." . PHP_EOL;
    } catch (InvalidArtistNameException $ex) {
        echo $ex->getMessage();
    } catch (InvalidSongNameException $ex) {
        echo $ex->getMessage();
    } catch (InvalidSongMinutesException $ex) {
        echo $ex->getMessage();
    } catch (InvalidSongSecondsException $ex) {
        echo $ex->getMessage();
    }
}

echo $songs;