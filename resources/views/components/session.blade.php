@if (session('message'))
    <div style="margin: 0px" id="popSuccess" class="pop" x-data="{ isOpen: true }" x-init="setTimeout(() => { isOpen = false; }, 3000)" >
        <div class="successPopup"  role="alert" x-show="isOpen" class="popup">
            {{ session('message') }}
         
        </div>
    </div>
@elseif (session('denied'))
    <div style="margin: 0px" id="popDenied" class="pop" x-data="{ isOpen: true }" x-init="setTimeout(() => { isOpen = false; }, 3000)" >
        <div class="deniedPopup"  role="alert" x-show="isOpen" class="popup">
            {{ session('denied') }} 
          
           
        </div>
    </div>
@endif

<script>
    function hidePopup() {
        document.getElementById('popSuccess').style.display = 'none';
    }
    function hidePopupDenied() {
        document.getElementById('popDenied').style.display = 'none';
    }
</script>