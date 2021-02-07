@extends("layout")
    @section("conteudo")

         <div class="column is-2">
            <h4 class="title is-4">Cadastrar</h4>
        </div>

        <div class="row">
              <div class="column">
                    <div class="field is-horizontal">
                          <div class="field-label is-normal">
                            <label class="label">Formulario</label>
                          </div>
                          
                          <div class="field-body">

                          <!------------CAMPO NOME------------>
                              <div class="field">
                                  <p class="control is-expanded has-icons-left">
                                    <input class="input" type="text" placeholder="Name">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-user"></i>
                                    </span>
                                  </p>
                                </div>

                          <!------------CAMPO DE CPF------------>  
                                <div class="field">
                                  <p class="control is-expanded has-icons-left">
                                    <input class="input" type="text" placeholder="CPF">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-poll-h"></i>
                                    </span>
                                  </p>
                                </div>

                                                        
                          </div>
                    </div>
              </div>

              <div class="column">
                    <div class="field is-horizontal">
                      <div class="field-label">
                       <!-- Esse espaço em branco é para espaçameto -->
                      </div>

                            <div class="field-body">

                            <!------------CAMPO EMAIL------------>
                                <div class="field">
                                  <p class="control is-expanded has-icons-left has-icons-right">
                                    <input class="input is-success" type="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                      <i class="fas fa-check"></i>
                                    </span>
                                  </p>
                                </div>

                            <!------------CAMPO DE SENHA------------>
                            <div class="field">
                              <p class="control is-expanded has-icons-left">
                                <input class="input" type="password" placeholder="Senha">
                                <span class="icon is-small is-left">
                                  <i class="fas fa-lock"></i>
                                </span>
                                
                              </p>
                            </div>
                                                        
                        </div>
                    
                    </div>
              </div>

              <div class="column">
                    <div class="field is-horizontal">
                      <div class="field-label">
                       <!-- Esse espaço em branco é para espaçameto -->
                      </div>

                        <div class="field-body">

                        <!------------CAMPO DE ENDEREÇO------------>
                            <div class="field">
                                  <p class="control is-expanded has-icons-left">
                                    <input class="input" type="text" placeholder="Endereço">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-map-marked"></i>
                                    </span>
                                  </p>
                             </div>
                                                        
                        </div>
                    
                    </div>
                    
              </div>

              <div class="column">
                    
                     <div class="field is-horizontal">
                        <div class="field-label">
                         <!-- Esse espaço em branco é para espaçameto -->
                        </div>

                            <div class="field-body">

                            <!------------CAMPO DE CIDADE------------>
                                <div class="field">
                                      <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="Cidade">
                                        <span class="icon is-small is-left">
                                          <i class="fas fa-map-marked"></i>
                                        </span>
                                      </p>
                                 </div>                 
                            
                            <!------------CAMPO DE CEP------------>
                                <div class="field">
                                      <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="CEP">
                                        <span class="icon is-small is-left">
                                          <i class="fas fa-map-marked"></i>
                                        </span>
                                      </p>
                                 </div>

                            <!------------CAMPO DE ESTADO------------>
                                <div class="field">
                                      <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="Estado">
                                        <span class="icon is-small is-left">
                                          <i class="fas fa-map-marked"></i>
                                        </span>
                                      </p>
                                 </div>
                                                        
                            </div>
                    
                    </div>

               </div>
          

               <div class="column">
                    <div class="field is-horizontal">
                      <div class="field-label">
                        <!-- Esse espaço em branco é para espaçameto -->
                      </div>

                      <div class="field-body">
                        <div class="field">
                          <div class="control">
                            <button class="button is-primary">
                              Cadastrar
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            
        </div>

                    

                        
              
            
    @endsection
