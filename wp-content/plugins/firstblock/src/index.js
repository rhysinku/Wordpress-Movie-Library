import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps } from "@wordpress/block-editor";
import "./style.scss";

registerBlockType("ml-custom-block/firstblock", {
  edit: function () {
    const blockProps = useBlockProps();
    return <p {...blockProps}>Edit</p>;
  },
  save: function () {
    const saveBlockProps = useBlockProps.save();
    return <p {...saveBlockProps}>Save</p>;
  },
});
