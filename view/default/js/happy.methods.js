var happy = {
    Phone: function (val) {
        return /^1[3-8]\d{9}$/.test(val);
    },

    // matches mm/dd/yyyy (requires leading 0's (which may be a bit silly, what do you think?)
    date: function (val) {
        return /^(?:0[1-9]|1[0-2])\/(?:0[1-9]|[12][0-9]|3[01])\/(?:\d{4})/.test(val);
    },

    email: function (val) {
        return /^(?:\w+\.?\+?)*\w+@(?:\w+\.)+\w+$/.test(val);
    },

    minLength: function (val, length) {
        return val.length >= length;
    },

    maxLength: function (val, length) {
        return val.length <= length;
    },

    equal: function (val, val2) {
        return (val == val2);
    },
    between:function(val,val2)
    {
        return (val2.min<=val.length&&val.length<=val2.max);
    }
};
