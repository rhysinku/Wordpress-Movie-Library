import { useBlockProps } from "@wordpress/block-editor";
import "./style.scss";
export default function Save() {
  const saveBlockProps = useBlockProps.save();
  return <p {...saveBlockProps}>Save</p>;
}
