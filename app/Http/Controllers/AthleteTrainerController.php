<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\Forma\AthleteInterface;
use App\Repository\Interfaces\Forma\GalleryInterface;
use App\Repository\Interfaces\Forma\TrainerInterface;

class AthleteTrainerController extends Controller
{

    /*
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function personalTrainersShow(TrainerInterface $trainer)
    {
        $trainers = $trainer->getAllTrainers();
        return view('showDetailsSlider.trainer', compact('trainers'));
    }

    /*
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function athletesShow(AthleteInterface $athlete)
    {
        $athletes = $athlete->getAllAthletes();
        return view('showDetailsSlider.athlete', compact('athletes'));
    }

    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function athlete(int $id,AthleteInterface $athlete , GalleryInterface $gallery)
    {
        $profile = $athlete->getGetSingleAthlete($id);
        $gallery = $gallery->getAthleteGallery($id);
        return view('profile.index', compact(['profile','gallery']));
    }

    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function trainer(int $id,TrainerInterface $trainer,GalleryInterface $gallery)
    {
        $profile = $trainer->getGetSingleTrainer($id);
        $profile->name = $profile->trainer_name;
        $gallery = $gallery->getAthleteGallery($id);
        return view('profile.index', compact(['profile','gallery']));
    }

    /*
     * @param int $id
     * @return Mix View
     * @auther Nader Ahmed
     * */
    public function gallery(int $id,GalleryInterface $gallery,AthleteInterface $athlete)
    {
        $gallery = $gallery->getAthleteGallery($id);
        $profile = $athlete->getGetSingleAthlete($id);
        if ($profile->type == 'Trainer') {
            $profile->name = $profile->trainer_name;
        }

        return view('profile.gallery', compact(['gallery', 'profile']));
    }
}
