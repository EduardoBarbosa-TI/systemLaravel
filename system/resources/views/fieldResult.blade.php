<x-layout  :mensagem-success="$mensagemSuccess" :data-base-tables="$dataBaseTables"/>
<div class="col-12 col-md-12">
    <div class="mb-3 border p-5">
        <table class="table">     
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
              </tr>
            </thead>
            @foreach ($responseSelect as $i => $response)
            <tbody>
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$response->name}}</td>
                <td class="d-flex justify-content-center align-items-left">
                  <a href="#" class="bi bi-trash me-3 text-danger">
                
                  </a>
                  <a href="#" class="bi bi-pencil text-dark">
                    
                  </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>
</div>  
</div>
</div>
</body>

</html>