<div>
    <form class="needs-validation" novalidate="">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Row-->
            <div class="row g-3">
                <!--begin::Col-->
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">
                        <Ri:a>Referencia Cliente</Ri:a><span class="required-indicator sr-only"> (required)</span>
                    </label>
                    <input type="text" class="form-control" id="validationCustom01" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3"> <label for="validationCustom04" class="form-label">Forma Pago<span
                            class="required-indicator sr-only"> (required)</span></label> <select class="form-select"
                        id="validationCustom04" required="">
                        <option selected="" disabled="" value="">-Seleccionar-</option>
                        <option value='Efectivo'>Efectivo</option>
                        <option value='Plin'>Plin</option>
                        <option value='Yape'>Yape</option>
                        <option value='Transferencia'>Transferencia</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Comprobante<span
                            class="required-indicator sr-only"> (required)</span></label>
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3"> <label for="validationCustom04" class="form-label">Productos<span
                            class="required-indicator sr-only"> (required)</span></label> <select class="form-select"
                        id="validationCustom04" required="">
                        <option selected="" disabled="" value="">-Seleccionar-</option>
                        @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->unidad->nombre}} {{$producto->nombre }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-1">
                    <label for="validationCustom01" class="form-label">
                        <Ri:a>Cantidad</Ri:a><span class="required-indicator sr-only"> (required)</span>
                    </label>
                    <input type="text" class="form-control" id="validationCustom01" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <!--end::Col-->
                 <!--begin::Col-->
                <div class="col-md-4"> <label for="validationCustom04" class="form-label">Cremas<span
                            class="required-indicator sr-only"> (required)</span></label> <select class="form-select"
                        id="validationCustom04" required="">
                        <option selected="" disabled="" value="">-Seleccionar-</option>
                        @foreach ($cremas as $crema)
                        <option value="{{ $crema->id }}">{{$crema->nombre }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <!--end::Col-->
                  <!--begin::Col-->
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">
                        <Ri:a>Observación</Ri:a><span class="required-indicator sr-only"> (required)</span>
                    </label>
                    <input type="text" class="form-control" id="validationCustom01" required="">
                    <div class="valid-feedback">Looks good!</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-1">
                    <br>
                    <button class="btn btn-success" type="submit">+ Agregar</button>
                </div>
                <!--end::Col-->
              

                <!--begin::Col-->
                <div class="col-md-12">
                    <table class="table" role="table">
                        <thead>
                            <tr>
                                <th style="width: 10px" scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Costo</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Agregado</th>
                                <th scope="col">Cremas</th>
                                <th scope="col">Observación</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{--  <tr class="align-middle">
                                <td>1.</td>
                                <td>Update software</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge text-bg-danger">55%</span></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer"> <button class="btn btn-info" type="submit">Submit form</button> </div>
        <!--end::Footer-->
    </form>
</div>