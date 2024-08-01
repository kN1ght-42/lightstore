var element = document.querySelectorAll("input[type=tel]");

element.forEach((el) => {
    var maskOptions = {
        mask: "+7(000)000-00-00",
        lazy: false,
    };
    var mask = new IMask(el, maskOptions);
});

var element2 = document.querySelectorAll("input[type=email]");

element2.forEach((el) => {
    var maskOptions2 = {
        mask: function (value) {
            if (/^[a-z0-9_\.-]+$/.test(value)) return true;
            if (/^[a-z0-9_\.-]+@$/.test(value)) return true;
            if (/^[a-z0-9_\.-]+@[a-z0-9-]+$/.test(value)) return true;
            if (/^[a-z0-9_\.-]+@[a-z0-9-]+\.$/.test(value)) return true;
            if (/^[a-z0-9_\.-]+@[a-z0-9-]+\.[a-z]{1,4}$/.test(value))
                return true;
            if (/^[a-z0-9_\.-]+@[a-z0-9-]+\.[a-z]{1,4}\.$/.test(value))
                return true;
            if (
                /^[a-z0-9_\.-]+@[a-z0-9-]+\.[a-z]{1,4}\.[a-z]{1,4}$/.test(value)
            )
                return true;
            return false;
        },
        lazy: false,
    };
    var mask2 = new IMask(el, maskOptions2);
});
