@include('backend.back-header')
@include('backend.nav-back')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
    </ol>
DataTable Example
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>Post ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Position</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>


    <tbody>
       <table>
        <th>
            <td>
                table
            </td>
        </th>
       </table>
    </tbody>
</table>
</div>
@include('backend.back-script')