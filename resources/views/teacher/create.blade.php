<div>
    <form action="{{route('teacher.store')}}" method="post">

        @csrf <!-- token mefirsonad -->

        <label for="">Name</label>
        <input type="text" name="name" id=""><br>
        <label for="">Surname</label>
        <input type="text" name="surname" id=""><br>
        <label for="">Birthday</label>
        <input type="date" name="birthday" id=""><br>
        <input type="submit" value="Add">
    </form>
</div>

{{--<table border=1>--}}
{{--    @foreach($teacher as $teachers)--}}
{{--        <tr>--}}
{{--            <td>{{ $teachers->name }}</td>--}}
{{--            <td>{{ $teachers->surname }}</td>--}}
{{--            <td>{{ $teachers->birthday  }}</td>--}}
{{--        </tr>--}}
{{--        <br>--}}
{{--    @endforeach--}}

{{--</table>--}}
