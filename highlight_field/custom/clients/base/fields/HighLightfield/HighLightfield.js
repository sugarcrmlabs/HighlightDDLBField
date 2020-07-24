({
    extendsFrom: 'EnumField',
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);
    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function() {
        this._super('_render');
    },

    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function(value) {
		var bgColor = '#ffffff';
		if(!_.isEmpty(this.def.colors)) {
			var arrColors = JSON.parse(this.def.colors);
			bgColor = arrColors[value];
		}        
        this.bgColor = bgColor;
        this.txtColor = this.def.text_color;
        return this._super('format', [value]);
    },

    /**
     * Called when unformatting the value for storage
     * @param value
     */
    unformat: function(value) {
        return this._super('unformat', [value]);
    }
})
