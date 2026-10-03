@props(['type' => 'info', 'message' => ''])

<div style="padding: 15px; border-radius: 6px; margin-bottom: 20px; 
    color: {{ $type === 'success' ? '#065f46' : '#991b1b' }}; 
    background-color: {{ $type === 'success' ? '#d1fae5' : '#fee2e2' }}; 
    border: 1px solid {{ $type === 'success' ? '#a7f3d0' : '#fca5a5' }};">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>