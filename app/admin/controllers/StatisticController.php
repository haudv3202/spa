<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
use App\models\Statistic;

class StatisticController extends BaseController{
    public function listStatistic(){
        $sevenDayAgo = Statistic::sevenDaysAgo('total','create_date');
        $oneMonth = Statistic::oneMonth('total','create_date');
        $oneYear = Statistic::oneYear('total','create_date');
        $total = Statistic::totalStatistic('total');
        $this->render('admin.statistic.list', compact('sevenDayAgo', 'oneMonth', 'oneYear','total'));
    }
}
?>