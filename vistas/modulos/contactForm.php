              <form method="post" action="" class="reveal-content contact-form">
                  <div class="form-group">
                      <input type="name" class="form-control" name="nameC" placeholder="Nombre Completo" required>
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" name="emailC" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="addressC" placeholder="Tu dirección" required>
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" name="messageC" rows="3" placeholder="Escribe tu mensaje" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </form>

<?php
    $contacto = new contaC();
    $contacto -> contactInsert();