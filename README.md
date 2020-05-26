# acl (Lista de controle de acesso)
 `trabalhando com seeder:
-> php artisan make:seeder PapelSeeder
->PermissaoSeeder

$p1 = papel::firstOrCreate([
'nome' => 'Admin',
'descricao' => 'Acesso total ao sistema'
])
$p2 = Papel::firstOnCreate([
'nome'	=> 'Gerente',
'descricao' => 'Gerenciamento do sistema'
])
$p3 = Papel::firstOrCreate([
'nome' => 'Usuario',
'descricao' => 'Acesso ao site como usuario'
])

semear no bd:

permissão:
$usuarios1 = Permissao:firstOrCreate([
'nome' => 'usuario-view',
'descricao'=>'Acesso a lista de Usuários'
])
$usuarios2 = Permissao:firstOrCreate([
'nome' => 'usuario-create',
'descricao'=>'Adicionar Usuários'
])
$usuarios2 = Permissao::firstOrCreate([
'nome' => 'usuario-edit',
'descricao' => 'Editar Usuários usuarios'
])
$usuarios3 = Permissao:firstOrCreate([
'nome' => 'usuario-delete',
'descricao'=>'Deletar Usuários'
])
$papeis1 = Permissao:firstOrCreate([
'nome' => 'usuario-view',
'descricao'=>'Acesso a lista de Usuários'
])

---crud
refatorar codigo:
-criar uma página de adm
-> criar AdminController
	-index()[return admin.index]
	-middleware auth no construct
	-criar um gp protegido de rotas
	Route::group(['middleware' => 'auth','prefix' => 'admin'], function(){

})`
