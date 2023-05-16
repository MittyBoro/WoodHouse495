@extends('layouts.email')

@section('header', $subject)

@section('content')

  @php
    $keyStyle = 'white-space:nowrap; padding: 4px 20px 4px 0; color: #999999;';
    $valueStyle = 'padding: 4px 0 4px 0;';
    $prodTDStyle = 'padding: 10px 5px; background-color: #fff; vertical-align: middle; border-bottom: 1px solid #eeeeee; border-top: 1px solid #eeeeee;';
  @endphp

  <table width="100%">
    <tbody>
      <tr>
        <td style="{!! $keyStyle !!}">Форма</td>
        <td style="{!! $valueStyle !!}">{{ $order->form_name }}</td>
      </tr>
      @if ($order->name)
        <tr>
          <td style="{!! $keyStyle !!}">Имя</td>
          <td style="{!! $valueStyle !!}">{{ $order->name }}</td>
        </tr>
      @endif
      <tr>
        <td style="{!! $keyStyle !!}">Телефон</td>
        <td style="{!! $valueStyle !!}">
          {{ $order->phone }}
          <a href="tel:{{ $order->getAttributes()['phone'] }}">[ссылка]</a>
        </td>
      </tr>
      @if ($order->description)
        <tr>
          <td style="{!! $keyStyle !!}">Коммантарий</td>
          <td style="{!! $valueStyle !!}">{{ $order->description }}</td>
        </tr>
      @endif
      @if ($order->extra)
        <tr>
          <td style="{!! $keyStyle !!}">Дополнительно</td>
          <td style="{!! $valueStyle !!}">
            @foreach ($order->extra as $k => $v)
              <small>
                <i>{{ $k }}</i>:<b>{{ $v }}</b>
              </small><br>
            @endforeach
          </td>
        </tr>
      @endif
      @if ($order->files->count())
        <tr>
          <td style="{!! $keyStyle !!}">Файлы</td>
          <td style="{!! $valueStyle !!}">
            @foreach ($order->files as $v)
              <a target="_blank" href="{{ $v }}">
                <b><small>{{ basename($v) }}</small></b>
              </a><br>
            @endforeach
          </td>
        </tr>
      @endif

      {{-- <tr>
        <td colspan="2" style="padding: 15px 0px;">
          <div style="border-top: 3px solid #eeeeee;"></div>
        </td>
      </tr> --}}

    </tbody>
  </table>

@endsection

