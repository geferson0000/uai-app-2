<style>
    .code {
        color: rgb(0, 0, 0);
        width: 50px;
    }

    .field {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<table id="datatable_users" class="hover dataTable no-footer" style="width: 100%" aria-describedby="datatable_users_info">
    <thead>
        <tr>
            <th class="code centered sorting sorting_desc" tabindex="0" aria-controls="datatable_users" rowspan="1"
                colspan="1" {{-- style="width: 50px" --}} aria-label="#: activate to sort column ascending"
                aria-sort="descending">
                código
            </th>
            <th class="centered sorting" tabindex="0" aria-controls="datatable_users" rowspan="1" colspan="1"
                style="width: 189px" aria-label="Name: activate to sort column ascending">
                Nombre
            </th>
            <th class="centered sorting" tabindex="0" aria-controls="datatable_users" rowspan="1" colspan="1"
                style="width: 166px" aria-label="Company: activate to sort column ascending">
                Apellido
            </th>
            <th class="centered sorting_disabled" rowspan="1" colspan="1" style="width: 60px" aria-label="Status">
                Cedula
            </th>
            <th class="centered sorting_disabled" rowspan="1" colspan="1" style="width: 60px" aria-label="Status">
                P00
            </th>
            <th class="centered sorting_disabled" rowspan="1" colspan="1" style="width: 60px" aria-label="Status">
                Coordinacion UIA
            </th>
            <th class="centered sorting_disabled" rowspan="1" colspan="1" style="width: 60px" aria-label="Status">
                Cargo





        </tr>
    </thead>
    <tbody id="tableBody_users"></tbody>
</table>
