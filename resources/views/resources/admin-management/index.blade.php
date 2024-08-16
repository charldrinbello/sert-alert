<x-app-layout>
    <div class="pagetitle">
        <h1>Admin Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=" {{ route('dashboard')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Admin Management</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Admin Management 
                            <a href="{{ route('register') }}" 
                                type="button" 
                                class="btn btn-primary float-end">
                                    Add Admin
                            </a>
                        </h6>
                        
                        <hr>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td>Position</td>

                                    <td>
                                        <a href="" class="btn btn-dark m-1"><i class="bi bi-folder-symlink"></i></a>
                                        <a href="" class="btn btn-success m-1"><i class="bi bi-pencil-square"></i></a>

                                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>

                                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Account</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">Are you sure you want to delete this post? This action cannot be undone</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                                        <form action="" method="post">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Save changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
