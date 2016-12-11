<?php
namespace Attapp\Http\Traits;

use Attapp\Course;

Trait SectionsTrait {
    public function getSectionNumber($id) {

    // Pull Course from the database
    $course = new Course;
    $course = Course::find($id);

    return $course->course_code;
    }
}
