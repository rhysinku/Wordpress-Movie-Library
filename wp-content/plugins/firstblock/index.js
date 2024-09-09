const registerBlockType = wp.blocks.registerBlockType;
const createElement = wp.element.createElement;

registerBlockType("ml-custom-block/firstblock", {
  edit: function () {
    return createElement("p", null, "Edit");
  },
  save: function () {
    return createElement("p", null, "Save");
  },
});
