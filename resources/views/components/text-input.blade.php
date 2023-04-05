@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
{!! $attributes->merge(
    ['class' => 'border-gray-300
                 focus:border-indigo-500
                 focus:ring-indigo-500
                 rounded-md
                 shadow-sm
                 bg-gray-50 border border-gray-300
                 text-gray-900 sm:text-sm
                 rounded-lg focus:ring-primary-600
                 focus:border-primary-600 block
                 w-full p-2.5 
                 p-1']) 
!!}>
