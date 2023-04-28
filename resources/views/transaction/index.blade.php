@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transações</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid" x-data="transactionsIndex">

            <div class="card">
                <div class="card-header">
                    <a class="btn btn-sm btn-primary" href="#">
                        Nova transação
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Tipo</th>
                                <th>Prazo</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="transaction in transactions" :key="transaction.id">
                                <tr>
                                    <td x-text="transaction.id"></td>
                                    <td x-text="transaction.name"></td>
                                    <td x-text="(transaction.debit) ? 'Despesa' : 'Receita'"></td>
                                    <td x-text="transaction.due_date"></td>
                                    <td x-text="transaction.value"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Nova transação
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <input type="radio" class="btn-check" name="debit" id="income" autocomplete="off" checked>
                        <label class="btn btn-outline-success" for="income">Receita</label>

                        <input type="radio" class="btn-check" name="debit" id="debit" autocomplete="off">
                        <label class="btn btn-outline-danger" for="debit">Despesa</label>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <label class="form-label" for="description">Descrição</label>
                                <input class="form-control" type="text" id="description">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label class="form-label" for="category">Categoria</label>
                                <select class="form-control" id="category">
                                    <template x-for="category in categories" :key="category.id">
                                        <option :value="category.id">
                                            <span x-text="category.name"></span>
                                        </option>
                                    </template>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="due_date">Vencimento</label>
                                <input class="form-control" type="date" id="due_date">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label" for="value">Valor</label>
                                <input class="form-control" type="number" step="0.01" min="0" id="value">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input class="form-check-input" id="is_paid" type="checkbox">
                            <label class="form-check-label" for="is_paid">Pago</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="monthly" type="checkbox">
                            <label class="form-check-label" for="monthly">Mensal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="fixed_value" type="checkbox">
                            <label class="form-check-label" for="fixed_value">Valor Fixo</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Editar transação
                </div>
                <div class="card-body"></div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
        const transactionsIndex = {
            transactions: @json($transactions),
            categories: @json($categories)
        }
    </script>
@endsection
