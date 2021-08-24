@extends('layouts.app')


@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kalkulator') }}</div>

                <div class="card-body">
                        
           <p class="text-center">Rodzaj konstrukcji:</p>
           
           <div class="d-flex justify-content-center">
               
               
            <form action="wyliczone" method="GET">
            <select id="konstrukcja" name="konstrukcja">
            <option value="dach">Dachówka</option>
            <option value="blacha">Blacha</option>
            <option value="trapez">Trapez</option>
            </select>
            
                <p>Liczba rzędów:</p>
             <select id="rzedy" name="rzedy">
            <?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
            </select>   
                
                <p>Liczba paneli w rzędzie:</p>
                <select id="panele" name="panelewrzedzie">
            <?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
            </select>  
                
                <p> Kolor: </p>
                <select id="kolor" name="kolor">
            <option value="surowe">Surowe</option>
            <option value="czarne">Czarne</option>
            </select>
                
                
                <br><br><br>               
                 <input type="submit" value="Oblicz">
                
            </form>
            
                   </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection