<?php

namespace App\Http\Livewire\Invoices;

use Livewire\Component;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;

    public $updateMode = false;
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';

    public
        $invoice_id,
        $search,
        $s_name,
        $s_father,
        $s_cnic,
        $s_phone,
        $s_address,
        $b_name,
        $b_father,
        $b_cnic,
        $b_phone,
        $b_address,
        $reg_no,
        $chassis_no,
        $engine_no,
        $mark,
        $hp,
        $model,
        $kota,
        $post_office,
        $reg_book,
        $reg_file,
        $file_pg,
        $no_plate,
        $car_color,
        $amount,
        $amount_words,
        $w1_name,
        $w1_father,
        $w1_phone,
        $w1_address,
        $w2_name,
        $w2_father,
        $w2_phone,
        $w2_address,
        $s_commission,
        $b_commission,
        $inv_date,
        $inv_time;

    protected $listeners = [
        'delete-invoice' => 'delete',
    ];

    public function mount()
    {
        $this->inv_date = Carbon::parse(Carbon::now())->format('Y-m-d');
        $this->inv_time = date('H:i', strtotime(Carbon::now() . ' + 5 hours'));
    }

    public function render()
    {
        // $invoices = Invoice::orderBy('id', 'desc')->where('reg_no', 'LIKE', '%' . $this->search . '%')->paginate(10);

        $searchTerm = preg_replace('/[^a-zA-Z0-9]/', '', $this->search);
        $invoices = Invoice::orderBy('id', 'desc')
            ->whereRaw("REGEXP_REPLACE(reg_no, '[^a-zA-Z0-9]', '') LIKE '%" . $searchTerm . "%'")
            ->paginate(10);


        return view('livewire.invoices.invoices', [
            'invoices' => $invoices,
        ]);
    }

    private function resetInputFields()
    {
        $this->s_name = '';
        $this->s_father = '';
        $this->s_cnic = '';
        $this->s_phone = '';
        $this->s_address = '';
        $this->b_name = '';
        $this->b_father = '';
        $this->b_cnic = '';
        $this->b_phone = '';
        $this->b_address = '';
        $this->reg_no = '';
        $this->chassis_no = '';
        $this->engine_no = '';
        $this->mark = '';
        $this->hp = '';
        $this->model = '';
        $this->kota = '';
        $this->post_office = '';
        $this->reg_book = '';
        $this->reg_file = '';
        $this->file_pg = '';
        $this->no_plate = '';
        $this->car_color = '';
        $this->amount = '';
        $this->amount_words = '';
        $this->w1_name = '';
        $this->w1_father = '';
        $this->w1_phone = '';
        $this->w1_address = '';
        $this->w2_name = '';
        $this->w2_father = '';
        $this->w2_phone = '';
        $this->w2_address = '';
        $this->s_commission = '';
        $this->b_commission = '';

        $this->mount();
        $this->resetValidation();
    }

    public function store()
    {
        $rules = [
            's_name' => ['required', 'string', 'max:255'],
            's_father' => ['required', 'string', 'max:255'],
            's_cnic' => ['required', 'string', 'max:255'],
            's_phone' => ['required', 'string', 'max:255'],
            's_address' => ['required', 'string', 'max:255'],
            'b_name' => ['required', 'string', 'max:255'],
            'b_father' => ['required', 'string', 'max:255'],
            'b_cnic' => ['required', 'string', 'max:255'],
            'b_phone' => ['required', 'string', 'max:255'],
            'b_address' => ['required', 'string', 'max:255'],
            'reg_no' => ['required', 'string', 'max:255'],
            'chassis_no' => ['required', 'string', 'max:255'],
            'engine_no' => ['required', 'string', 'max:255'],
            'mark' => ['required', 'string', 'max:255'],
            'hp' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'post_office' => ['required', 'string', 'max:255'],
            'reg_book' => ['required', 'string', 'max:255'],
            'reg_file' => ['required', 'string', 'max:255'],
            'file_pg' => ['required', 'string', 'max:255'],
            'no_plate' => ['required', 'string', 'max:255'],
            'car_color' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric'],
            'amount_words' => ['required', 'string', 'max:255'],
            'w1_name' => ['nullable', 'string', 'max:255'],
            'w1_father' => ['nullable', 'string', 'max:255'],
            'w1_phone' => ['nullable', 'string', 'max:255'],
            'w1_address' => ['nullable', 'string', 'max:255'],
            'w2_name' => ['nullable', 'string', 'max:255'],
            'w2_father' => ['nullable', 'string', 'max:255'],
            'w2_phone' => ['nullable', 'string', 'max:255'],
            'w2_address' => ['nullable', 'string', 'max:255'],
            's_commission' => ['required', 'numeric'],
            'b_commission' => ['required', 'numeric'],
            'inv_date' => ['required'],
            'inv_time' => ['required'],
        ];

        $messages = [
            'required' => 'This field is required.',
            'numeric' => 'The data must be a number.',
        ];

        $data = [
            's_name' => $this->s_name,
            's_father' => $this->s_father,
            's_cnic' => $this->s_cnic,
            's_phone' => $this->s_phone,
            's_address' => $this->s_address,
            'b_name' => $this->b_name,
            'b_father' => $this->b_father,
            'b_cnic' => $this->b_cnic,
            'b_phone' => $this->b_phone,
            'b_address' => $this->b_address,
            'reg_no' => $this->reg_no,
            'chassis_no' => $this->chassis_no,
            'engine_no' => $this->engine_no,
            'mark' => $this->mark,
            'hp' => $this->hp,
            'model' => $this->model,
            'kota' => $this->kota,
            'post_office' => $this->post_office,
            'reg_book' => $this->reg_book,
            'reg_file' => $this->reg_file,
            'file_pg' => $this->file_pg,
            'no_plate' => $this->no_plate,
            'car_color' => $this->car_color,
            'amount' => $this->amount,
            'amount_words' => convertNumbersToWords($this->amount),
            'w1_name' => $this->w1_name,
            'w1_father' => $this->w1_father,
            'w1_phone' => $this->w1_phone,
            'w1_address' => $this->w1_address,
            'w2_name' => $this->w2_name,
            'w2_father' => $this->w2_father,
            'w2_phone' => $this->w2_phone,
            'w2_address' => $this->w2_address,
            's_commission' => $this->s_commission,
            'b_commission' => $this->b_commission,
            'inv_date' => $this->inv_date,
            'inv_time' => $this->inv_time,
        ];

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            $this->emit('reset-mask-values');
        }

        $invoice = Invoice::create($validator->validate());
        $invoice->update([
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        $this->resetInputFields();
        $this->alert('Invoice Created!', 'The Invoice have been created successfully.');
        $this->emit('close_invoice_modal');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $invoice = Invoice::where('id', $id)->first();
        $this->invoice_id = $id;
        $this->s_name = $invoice->s_name;
        $this->s_father = $invoice->s_father;
        $this->s_cnic = $invoice->s_cnic;
        $this->s_phone = $invoice->s_phone;
        $this->s_address = $invoice->s_address;
        $this->b_name = $invoice->b_name;
        $this->b_father = $invoice->b_father;
        $this->b_cnic = $invoice->b_cnic;
        $this->b_phone = $invoice->b_phone;
        $this->b_address = $invoice->b_address;
        $this->reg_no = $invoice->reg_no;
        $this->chassis_no = $invoice->chassis_no;
        $this->engine_no = $invoice->engine_no;
        $this->mark = $invoice->mark;
        $this->hp = $invoice->hp;
        $this->model = $invoice->model;
        $this->kota = $invoice->kota;
        $this->post_office = $invoice->post_office;
        $this->reg_book = $invoice->reg_book;
        $this->reg_file = $invoice->reg_file;
        $this->file_pg = $invoice->file_pg;
        $this->no_plate = $invoice->no_plate;
        $this->car_color = $invoice->car_color;
        $this->amount = $invoice->amount;
        $this->amount_words = $invoice->amount_words;
        $this->w1_name = $invoice->w1_name;
        $this->w1_father = $invoice->w1_father;
        $this->w1_phone = $invoice->w1_phone;
        $this->w1_address = $invoice->w1_address;
        $this->w2_name = $invoice->w2_name;
        $this->w2_father = $invoice->w2_father;
        $this->w2_phone = $invoice->w2_phone;
        $this->w2_address = $invoice->w2_address;
        $this->s_commission = $invoice->s_commission;
        $this->b_commission = $invoice->b_commission;
        $this->inv_date = $invoice->inv_date;
        $this->inv_time = $invoice->inv_time;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $data = $this->validate([
            's_name' => ['required', 'string', 'max:255'],
            's_father' => ['required', 'string', 'max:255'],
            's_cnic' => ['required', 'string', 'max:255'],
            's_phone' => ['required', 'string', 'max:255'],
            's_address' => ['required', 'string', 'max:255'],
            'b_name' => ['required', 'string', 'max:255'],
            'b_father' => ['required', 'string', 'max:255'],
            'b_cnic' => ['required', 'string', 'max:255'],
            'b_phone' => ['required', 'string', 'max:255'],
            'b_address' => ['required', 'string', 'max:255'],
            'reg_no' => ['required', 'string', 'max:255'],
            'chassis_no' => ['required', 'string', 'max:255'],
            'engine_no' => ['required', 'string', 'max:255'],
            'mark' => ['required', 'string', 'max:255'],
            'hp' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'post_office' => ['required', 'string', 'max:255'],
            'reg_book' => ['required', 'string', 'max:255'],
            'reg_file' => ['required', 'string', 'max:255'],
            'file_pg' => ['required', 'string', 'max:255'],
            'no_plate' => ['required', 'string', 'max:255'],
            'car_color' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric'],
            'amount_words' => ['required', 'string', 'max:255'],
            'w1_name' => ['nullable', 'string', 'max:255'],
            'w1_father' => ['nullable', 'string', 'max:255'],
            'w1_phone' => ['nullable', 'string', 'max:255'],
            'w1_address' => ['nullable', 'string', 'max:255'],
            'w2_name' => ['nullable', 'string', 'max:255'],
            'w2_father' => ['nullable', 'string', 'max:255'],
            'w2_phone' => ['nullable', 'string', 'max:255'],
            'w2_address' => ['nullable', 'string', 'max:255'],
            's_commission' => ['required', 'numeric'],
            'b_commission' => ['required', 'numeric'],
            'inv_date' => ['required'],
            'inv_time' => ['required'],
        ], [
            'required' => 'This field is required.',
            'numeric' => 'The data must be a number.',
        ]);

        if ($this->invoice_id) {
            $invoice = Invoice::find($this->invoice_id);
            $invoice->update([
                's_name' => $this->s_name,
                's_father' => $this->s_father,
                's_cnic' => $this->s_cnic,
                's_phone' => $this->s_phone,
                's_address' => $this->s_address,
                'b_name' => $this->b_name,
                'b_father' => $this->b_father,
                'b_cnic' => $this->b_cnic,
                'b_phone' => $this->b_phone,
                'b_address' => $this->b_address,
                'reg_no' => $this->reg_no,
                'chassis_no' => $this->chassis_no,
                'engine_no' => $this->engine_no,
                'mark' => $this->mark,
                'hp' => $this->hp,
                'model' => $this->model,
                'kota' => $this->kota,
                'post_office' => $this->post_office,
                'reg_book' => $this->reg_book,
                'reg_file' => $this->reg_file,
                'file_pg' => $this->file_pg,
                'no_plate' => $this->no_plate,
                'car_color' => $this->car_color,
                'amount' => $this->amount,
                'amount_words' => convertNumbersToWords($this->amount),
                'w1_name' => $this->w1_name,
                'w1_father' => $this->w1_father,
                'w1_phone' => $this->w1_phone,
                'w1_address' => $this->w1_address,
                'w2_name' => $this->w2_name,
                'w2_father' => $this->w2_father,
                'w2_phone' => $this->w2_phone,
                'w2_address' => $this->w2_address,
                's_commission' => $this->s_commission,
                'b_commission' => $this->b_commission,
                'inv_date' => $this->inv_date,
                'inv_time' => $this->inv_time,
                'updated_by' => Auth::user()->id,
            ]);

            $this->updateMode = false;
            $this->resetInputFields();

            $this->alert('Invoice Updated!', 'The Invoice have been updated successfully.');
            $this->emit('close_invoice_modal');
        }
    }

    public function delete($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        $this->alert('Invoice Deleted!', 'The Invoice have been deleted successfully.');
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

    public function amountInWords()
    {
        $this->amount_words = convertNumbersToWords($this->amount);
    }
}
