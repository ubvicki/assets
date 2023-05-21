<table>
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
            <tr>
                @foreach ($row as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
        <tr>
            @foreach ($emptyRow as $index => $value)
                <td>
                    <input type="text" name="qualification[]" placeholder="Qualification">
                </td>
                <td>
                    <input type="text" name="institution[]" placeholder="Institution">
                </td>
                <td>
                    <input type="text" name="year[]" placeholder="Year">
                </td>
            @endforeach
        </tr>
    </tbody>
</table>
