<?php

namespace App\Http\Livewire\Roles;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    use WithPagination;

    public $updateMode = false;
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    public $role_id, $search, $name, $permission = [];

    protected $listeners = [
        'delete-role' => 'delete',
    ];

    public function render()
    {
        $roles = Role::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        $permissions = Permission::get();

        return view('livewire.roles.roles', [
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->permission = '';
        $this->resetValidation();
    }

    public function store()
    {
        $data = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255', 'unique:roles'],
            'permission' => ['required'],
        ]);

        $role = Role::create(['name' => $data['name']]);
        $role->syncPermissions($data['permission']);

        $this->alert('Role Added!', 'The role have been created successfully.');
        $this->resetInputFields();
        $this->emit('close_role_modal');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $role = Role::where('id', $id)->first();
        $this->role_id = $id;
        $this->name = $role->name;
        $this->permission = $role->permissions->pluck('id')->toArray();
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $data = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255', Rule::unique('roles')->ignore($this->role_id, 'id')],
            'permission' => ['required'],

        ]);

        if ($this->role_id) {
            $role = Role::find($this->role_id);
            $role->update([
                'name' => $this->name,
            ]);
            $role->syncPermissions($this->permission);

            $this->updateMode = false;
            $this->alert('Role Updated!', 'The role have been updated successfully.');
            $this->resetInputFields();
            $this->emit('close_role_modal');
        }
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        $this->alert('Role Deleted!', 'The role have been deleted successfully.');
    }

    public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!'
        ]);
    }

    public function alert($title, $text)
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => $title,
            'text' =>  $text
        ]);
    }
}
