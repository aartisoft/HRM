@component('mail::message')
    # Dear {{ $data['employee']->name }}

    Here goes your payslip for the month of {{ date('M') }}

    <table border="1" width="100%" style="text-align: left">
        <tr>
            <th>Basic</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->basic }} </td>
        </tr>
        <tr>
            <th>House Rent</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->house_rent }} </td>
        </tr>
        <tr>
            <th>Medical</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->medical }} </td>
        </tr>
        <tr>
            <th>Travel Allowance</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->travel_allowance }} </td>
        </tr>
        <tr>
            <th>Daily Allowance</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->daily_allowance }} </td>
        </tr>
        <tr>
            <th>Provident Fund</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->provident_fund }} </td>
        </tr>
        <tr>
            <th>Gross</th>
            <td style="text-align: right">{{ $data['employee']->relPayroll->gross }} </td>
        </tr>
    </table>



    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
