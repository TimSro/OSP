<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:14
 */

namespace App\Mocks;

use App\Interfaces\CalendarInterface;
use App\Interfaces\StudentSchoolClassInterface;
use App\Interfaces\TodoInterface;
use App\Interfaces\UserInterface;
use App\Model\CalendarDayModel;
use App\Model\CalendarEntryModel;
use App\Model\CalendarModel;
use App\Model\TimetableEntryModel;
use App\Model\TimetableModel;
use App\Model\TodoEntryModel;
use App\Model\TodoModel;

/**
 * Class FirstUserMock
 * @package App\Mocks
 */
class FirstUserMock implements UserInterface
{
    /**
     * @return string
     */
    public function getUsername()
    {
        return "hs";
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return "123456";
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return '$2y$10$M1RL87UmvPPwGAONYDrbluT/qQEhd2FVgrU.vh4b8MMw2UzgYEXJq';
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return "w";
    }

    /**
     * @return boolean
     */
    public function isTimetableAvailable()
    {
        return false;
    }

    /**
     * @return StudentSchoolClassInterface[]
     */
    public function getStudentSchoolClasses()
    {
        return [
            new FirstStudentSchoolClassMock(),
            new SecondStudentSchoolClassMock(),
        ];
    }

    /**
     * @return CalendarInterface
     */
    public function getCalendar()
    {
        $timetable = new FirstTimetableMock();

        return new CalendarModel([
            'user' => new FirstUserMock(),
            'calendarEntries' => [
                new CalendarDayModel([
                    'date' => 'Montag, den 19.11.2018',
                    'calendarEntries' => [
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Muffins mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[0]->getTimetableEntries()[0],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Muffins mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[0]->getTimetableEntries()[1],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Klausur mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[0]->getTimetableEntries()[2],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Klausur mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[0]->getTimetableEntries()[3],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'PRIV',
                            'note' => 'Tanzunterricht.',
                            'timetableEntry' => new TimetableEntryModel([
                                'lesson' => '18 Uhr',
                                'subject' => 'PRIV',
                                'schoolClass' => '',
                            ]),
                        ]),
                    ],
                ]),
                new CalendarDayModel([
                    'date' => 'Dienstag, den 20.11.2018',
                    'calendarEntries' => [
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Film mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[1]->getTimetableEntries()[0],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Film mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[1]->getTimetableEntries()[1],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'PRIV',
                            'note' => 'Gesangsunterricht.',
                            'timetableEntry' => new TimetableEntryModel([
                                'lesson' => '18 Uhr',
                                'subject' => 'PRIV',
                                'schoolClass' => '',
                            ]),
                        ]),
                    ],
                ]),
                new CalendarDayModel([
                    'date' => 'Mittwoch, den 21.11.2018',
                    'calendarEntries' => [
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Kostenplan bearbeiten.',
                            'timetableEntry' => $timetable->getTimetableDays()[2]->getTimetableEntries()[0],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Kostenplan bearbeiten.',
                            'timetableEntry' => $timetable->getTimetableDays()[2]->getTimetableEntries()[1],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Netzplan bearbeiten.',
                            'timetableEntry' => $timetable->getTimetableDays()[2]->getTimetableEntries()[2],
                        ]),
                    ],
                ]),
                new CalendarDayModel([
                    'date' => 'Donnerstag, den 22.11.2018',
                    'calendarEntries' => [
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Einführung in WUG.',
                            'timetableEntry' => $timetable->getTimetableDays()[3]->getTimetableEntries()[0],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Einführung in WUG.',
                            'timetableEntry' => $timetable->getTimetableDays()[3]->getTimetableEntries()[1],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Klausur besprechen.',
                            'timetableEntry' => $timetable->getTimetableDays()[3]->getTimetableEntries()[2],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Klausur-Rückgabe.',
                            'timetableEntry' => $timetable->getTimetableDays()[3]->getTimetableEntries()[3],
                        ]),
                    ],
                ]),
                new CalendarDayModel([
                    'date' => 'Freitag, den 23.11.2018',
                    'calendarEntries' => [
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Film mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[4]->getTimetableEntries()[0],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Film mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[4]->getTimetableEntries()[1],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Material mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[4]->getTimetableEntries()[2],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'U',
                            'note' => 'Material mitbringen.',
                            'timetableEntry' => $timetable->getTimetableDays()[4]->getTimetableEntries()[3],
                        ]),
                        new CalendarEntryModel([
                            'calendarKey' => 'PRIV',
                            'note' => 'Sport.',
                            'timetableEntry' => new TimetableEntryModel([
                                'lesson' => '18 Uhr',
                                'subject' => 'PRIV',
                                'schoolClass' => '',
                            ]),
                        ]),
                    ],
                ])
            ]
        ]);
    }

    /**
     * @return TodoInterface
     */
    public function getTodoList()
    {
        return new TodoModel([
            'user' => new FirstUserMock(),
            'todoEntries' => [
                new TodoEntryModel([

                ])
            ],
        ]);
    }
}