var app = app || {};

var AutoCompleteItemView = Backbone.View.extend({
    tagName: "li",
    template: _.template('<a href="#"><%= label %></a>'),

    events: {
        "click": "select"
    },
    
    initialize: function(options) {
        this.options = options;
    },

    render: function () {
        this.$el.html(this.template({
            "label": this.model.label()
        }));
        return this;
    },

    select: function () {
        this.options.parent.hide().select(this.model);
        return false;
    }

});

app.AutoCompleteView = Backbone.View.extend({
    tagName: "ul",
    className: "autocomplete",
    wait: 300,

    queryParameter: "query",
    minKeywordLength: 2,
    currentText: "",
    itemView: AutoCompleteItemView,

    initialize: function (options) {
        _.extend(this, options);
        this.filter = _.debounce(this.filter, this.wait);
    },

    render: function () {
        // disable the native auto complete functionality
        this.input.attr("autocomplete", "off");

        this.$el.width(this.input.outerWidth());

        this.input
            .keyup(_.bind(this.keyup, this))
            .keydown(_.bind(this.keydown, this))
            .after(this.$el)
            .focus($.proxy(this.focus, this))
            .blur($.proxy(this.blur, this))
        ;

        return this;
    },

    keydown: function (event) {
        if (event.keyCode == 38) return this.move(-1);
        if (event.keyCode == 40) return this.move(+1);
        if (event.keyCode == 13) return this.onEnter();
        if (event.keyCode == 27) return this.hide();
    },

    keyup: function () {
        var keyword = this.input.val();
        if (this.isChanged(keyword)) {
            if (this.isValid(keyword)) {
                this.filter(keyword);
            } else {
                this.hide()
            }
        }
    },

    focus: function() {
    	this.loadResult(this.model.first(5), "");
    },

    blur: function() {
        var hide = $.proxy(this.hide, this);
    	window.setTimeout(hide, 200);
    },

    filter: function (keyword) {
    	var keyword = keyword.toLowerCase();
        if (false) {

            var parameters = {};
            parameters[this.queryParameter] = keyword;

            this.model.fetch({
                success: function () {
                    this.loadResult(this.model.models, keyword);
                }.bind(this),
                data: parameters
            });

        } else {
            this.loadResult(this.model.filter(function (model) {
                return model.label().toLowerCase().indexOf(keyword) !== -1
            }), keyword);
        }
    },

    isValid: function (keyword) {
        return keyword.length > this.minKeywordLength
    },

    isChanged: function (keyword) {
        return this.currentText != keyword;
    },

    move: function (position) {
        var current = this.$el.children(".active"),
            siblings = this.$el.children(),
            index = current.index() + position;
        if (siblings.eq(index).length) {
            current.removeClass("active");
            siblings.eq(index).addClass("active");
        }
        return false;
    },

    onEnter: function () {
        this.$el.children(".active").click();
        return false;
    },

    loadResult: function (model, keyword) {
        this.currentText = keyword;
        this.show().reset();
        if (model.length) {
            _.forEach(model, this.addItem, this);
            this.show();
        } else {
            this.hide();
        }
    },

    addItem: function (model) {
        this.$el.append(new this.itemView({
            model: model,
            parent: this
        }).render().$el);
    },

    select: function (model) {
        var label = model.get("name");
        this.input.val(label);
        this.currentText = label;
        this.onSelect(model);
    },

    reset: function () {
        this.$el.empty();
        return this;
    },

    hide: function () {
        this.$el.hide();
        return this;
    },

    show: function () {
        this.$el.show();
        return this;
    },

    // callback definitions
    onSelect: function () {}

});
