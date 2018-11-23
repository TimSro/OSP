<?php

namespace App\Controller;

use App\Mocks\TimetableEntryMock;
use App\Mocks\TimetableMock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class TimetableController extends AbstractController
{
    /**
     * @Route("/timetable", name="timetable")
     */
    public function index()
    {
        $data = [
            new TimetableMock([
                'date' => new DateTime(),
                'timetableEntries' => [
                    new TimetableEntryMock([
                        'lesson' => '3.-4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ])
                ],
            ]),
            new TimetableMock([
                'date' => new DateTime(),
                'timetableEntries' => [
                    new TimetableEntryMock([
                        'lesson' => '3.-4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                ],
            ]),
            new TimetableMock([
                'date' => new DateTime(),
                'timetableEntries' => [
                    new TimetableEntryMock([
                        'lesson' => '3.-4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                ],
            ]),
            new TimetableMock([
                'date' => new DateTime(),
                'timetableEntries' => [
                    new TimetableEntryMock([
                        'lesson' => '3.-4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ])
                ],
            ]),
            new TimetableMock([
                'date' => new DateTime(),
                'timetableEntries' => [
                    new TimetableEntryMock([
                        'lesson' => '3.-4. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '5. - 6. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '7. - 8. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ]),
                    new TimetableEntryMock([
                        'lesson' => '9. - 10. Stunde',
                        'subject' => 'WUG',
                        'schoolClass' => '',
                    ])
                ],
            ]),
        ];

        return $this->render('timetable/index.html.twig', [
            'timetables' => $data,
        ]);
    }
}
