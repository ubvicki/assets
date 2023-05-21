<x-formtemplate>

        <x-slot name="title">Home Page</x-slot>
        <x-input name="name" type="text" label="Enter Your Name" />
        <x-input name="father_name" type="text" label="Enter Your Father's Name" />
        <x-input name="mobile_no" type="number" label="Enter Your Mobile No." />
        <x-input name="email" type="email" label="Enter Your Email" />
        <x-input name="dob" type="date" label="Enter Your Date of Birth" />
<x-checkbox name="colors" label="Select your favorite colors"
        :options="['red' => 'Red',
                'green' => 'Green',
                'blue' => 'Blue']" />
        <x-radio name="gender" label="Select your Gender" :options="['male' => 'Male', 'female' => 'Female', 'others' => 'Others']" />
        {{-- <x-fileinput></x-fileinput> --}}
        <x-input name="image" type="file" label="Upload Your Photo" />
        {{-- <div>
            @livewire('select-component', [
                'options' => ['male' => 'Male', 'female' => 'Female', 'others' => 'Others'],
                'label' => 'Select Your Gender',
                'name' => 'gender'
            ])
        </div> --}}
        <x-table :headers="['Qualification','Institution','Year','Stream','Score','Stream','Score']">
            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][name]" value="Secondary"/>
                </div>
            </td>

            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][institution]" value=""/>
                </div>
            </td>

            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][year]" value=""/>
                </div>
            </td>

            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][stream]" value=""/>
                </div>
            </td>

            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][score]" value=""/>
                </div>
            </td>

            <td class="pl-5">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][stream]" value=""/>
                </div>
            </td>

            <td class="pl-5 pr-2">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="qualifications[][score]" value=""/>
                </div>
            </td>
        </x-table>

        <x-table :headers="['Product Name','Price','Launch Year']">

            <td class="px-2">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="text" name="product_name" value=""/>
                </div>
            </td>

            <td class="px-2">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="number" name="price" value=""/>
                </div>
            </td>

            <td class="px-2">
                <div class="flex justify-evenly items-center">
                    <x-tabInput type="number" name="launch_year" value=""/>
                </div>
            </td>
        </x-table>

        <x-button text="Save" />

</x-formtemplate>


