<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazard extends Model
{
    use HasFactory;
    public $hazardTypeId, $hazardCategoryId, $hazardSourceId, $hazardStatusId, $hazardTitle;
    public $description, $reporterTypeId, $shehiaId, $place, $reporter, $startDate, $registeredBy;


}
