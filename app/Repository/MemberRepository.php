<?php

namespace App\Repository;

use App\Helpers\ResponseFormatter;
use App\Interfaces\MemberInterface;
use App\Models\Member;
use Exception;
use Rap2hpoutre\FastExcel\FastExcel;


class MemberRepository implements MemberInterface
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function getAll(\Illuminate\Http\Request $request)
    {
        $member = Member::paginate(5);

        if ($member->count()) {
            return ResponseFormatter::paginate($member);
        } else {
            return ResponseFormatter::notFound();
        }
    }

    public function importCSV()
    {

        try {
            $member = (new FastExcel)->configureCsv(',')->import(database_path('seeds/csv/member.csv'), function ($row) {
                return Member::create([
                    'id' => $row['id'],
                    'first_name' => $row['first_name'],
                    'last_name' => $row['last_name'],
                    'email' => $row['email'],
                    'phone' => $row['phone']
                ]);
            });

            echo "successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        // return ResponseFormatter::success($member);
    }
}
