@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categorias</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card" x-data="categoriesIndex">
                <div class="card-header">
                    <a class="btn btn-sm btn-primary" href="{{ route('categories.create') }}">
                        Nova categoria
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="category in categories" :key="category.id">
                                <tr>
                                    <td x-text="category.id"></td>
                                    <td x-text="category.name"></td>
                                    <td x-text="(category.debit) ? 'Despesa' : 'Receita'"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
        const categoriesIndex = {
            categories: @json($categories)
        }
    </script>
@endsection
