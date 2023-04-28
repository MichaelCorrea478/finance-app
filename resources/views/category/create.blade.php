@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Criar nova categoria</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card" x-data="createCategory">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Descrição</label>
                        <input type="text" id="name" class="form-control" x-model="formData.name">
                    </div>
                    <div class="form-group">
                        <label for="debit">Tipo</label>
                        <select id="debit" class="form-select" x-model="formData.debit">
                            <option value="0">Receita</option>
                            <option value="1">Despesa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success w-50" x-on:click="storeCategory()">
                            Salvar
                        </button>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
        const createCategory = {
            formData: {
                token: "{{ csrf_token() }}",
                name: '',
                debit: true
            },

            storeCategory() {
                axios.post("{{ route('categories.store') }}", this.formData)
                    .then((response) => {

                    })
            }

        }

    </script>
@endsection

