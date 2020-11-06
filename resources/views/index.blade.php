@extends('layouts.master')

@section('title')
    Calculadora
@endsection

@section('header')
    CALCULADORA 🖩
@endsection

@section('content')
    <input type="text" id="operand1" class="form-control" placeholder="Primer Operand"/> <input type="text" id="operand2" class="form-control" placeholder="Segon Operand"/> <br>
    <button class="btn btn-primary" id="suma" onclick="operacio('suma')">Suma</button>
    <button class="btn btn-success" id="resta" onclick="operacio('resta')">Resta</button>
    <button class="btn btn-info" id="multiplica" onclick="operacio('multiplica')">Multiplica</button>
    <button class="btn btn-warning" id="divideix" onclick="operacio('divideix')">Divideix</button>
    
    <!-- Botó invisible que només s'encarrega d'obrir el modal amb l'error, s'activa des del script amb JavaScript -->
    <button type="button" style="visibility: hidden;" data-toggle="modal" data-target="#errorModal" id="openModal"></button>

    <!-- Modal que mostra l'error per introduir dades del nom d'usuari -->
    <div class="modal" id="errorModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Error amb operands</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              Introdueix els dos operands per poder realitzar la operacio!
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tancar</button>
            </div>
      
          </div>
        </div>
      </div>

    <script>
        function operacio(operacio) {
            
            operand1 = document.getElementById("operand1");
            operand2 = document.getElementById("operand2");

            if (operand1.value.length > 0 && operand1.value.length > 0) {
                operand1 = operand1.value;
                operand2 = operand2.value;

                url = "/" + operacio + "/" + operand1 + "/" + operand2;
                window.location.href = url;
            }
            else {
                boto = document.getElementById('openModal');
                boto.click();
            }

        }
    </script>
@endsection

@section('botoInici')
  visibility: hidden;
@endsection