<div class="modal" id="modal2" data-animation="slideInOutLeft">
    <div class="modal-dialog" id="modaldialog">
        <header class="modal-header">
            <span>{{trans('ourinstitute.our-simbology')}}</span>
            <button class="close-modal" aria-label="close modal font-weight-bold" data-close>
                ✕
            </button>
        </header>
        <section>
            <div class="sectionbody">
                <p>{{trans('ourinstitute.our-logo')}}</p>
                <img src="{{url('/image/logo-web-02.png')}}">
            </div>
        </section>
        <footer class="modal-footer">
            <span class="footermodal">"{{trans('ourconcept.our-modal-footer')}}"</span>
        </footer>
    </div>
</div>
{{--<script>
    const openElss = document.querySelectorAll("[data-open]");
    const closeElss = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openElss) {
        el.addEventListener("click", function () {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    for (const el of closeElss) {
        el.addEventListener("click", function () {
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
</script>--}}
