
<script>
    
const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";

for (const el of openEls) {
  el.addEventListener("click", function() {
    const modalId = this.dataset.open;
    document.getElementById(modalId).classList.add(isVisible);
  });
}

for (const el of closeEls) {
  el.addEventListener("click", function() {
    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
  });
}

document.addEventListener("click", e => {
  if (e.target == document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible [data-close]").click();
  }
});

document.addEventListener("keyup", e => {
  // if we press the ESC
  if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible [data-close]").click();
  }
});

</script>

<div class="modal" id="modal1" data-animation="slideInOutLeft">
  <div class="modal-dialog" id="modaldialog">
    <header class="modal-header">
      <span>{{trans('commons.our-modal-header')}}</span>
      <button class="close-modal" aria-label="close modal font-weight-bold" data-close>
        ✕  
      </button>
    </header>
    <section>
      <div class="sectionbody">
        <span class="text-modal">{{trans('commons.our-content-1')}}</span><br/>
        <span>{{trans('commons.our-content-2')}}</span><br/>
        <span>{{trans('commons.our-content-3')}}</span><br/>
        <span>{{trans('commons.our-content-4')}}</span>
      </div>
    </section>
    <footer class="modal-footer">
     <span class= "footermodal">"{{trans('commons.our-modal-footer')}}"<span>
    </footer>
  </div>
</div>
