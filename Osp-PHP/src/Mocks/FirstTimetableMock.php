<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 19:47
 */

namespace App\Mocks;

use App\Interfaces\TimetableDayInterface;
use App\Interfaces\TimetableInterface;
use App\Interfaces\UserInterface;
use App\Model\TimetableDayModel;
use App\Model\TimetableEntryModel;

/**
 * Class FirstTimetableMock
 * @package App\Mocks
 */
class FirstTimetableMock implements TimetableInterface
{

    /**
     * @return TimetableDayInterface[]
     */
    public function getTimetableDays()
    {
        return [
            new TimetableDayModel([
                'day' => 'Montag',
                'timetableEntries' => [
                    new TimetableEntryModel([
                        'lesson' => '3.- 4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ])
                ],
            ]),
            new TimetableDayModel([
                'day' => 'Dienstag',
                'timetableEntries' => [
                    new TimetableEntryModel([
                        'lesson' => '3.- 4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ]),
                ],
            ]),
            new TimetableDayModel([
                'day' => 'Mittwoch',
                'timetableEntries' => [
                    new TimetableEntryModel([
                        'lesson' => '3.- 4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6A',
                    ]),
                ],
            ]),
            new TimetableDayModel([
                'day' => 'Donnerstag',
                'timetableEntries' => [
                    new TimetableEntryModel([
                        'lesson' => '3.- 4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6B',
                    ])
                ],
            ]),
            new TimetableDayModel([
                'day' => 'Freitag',
                'timetableEntries' => [
                    new TimetableEntryModel([
                        'lesson' => '3.- 4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIA6A',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6B',
                    ]),
                    new TimetableEntryModel([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => 'FIS6B',
                    ])
                ],
            ]),
        ];
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return new FirstUserMock();
    }
}