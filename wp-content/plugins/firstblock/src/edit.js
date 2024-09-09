import { useBlockProps } from "@wordpress/block-editor";
import "./style.scss";
export default function Edit() {
  const BlockProps = useBlockProps();
  return <p {...BlockProps}>Edit</p>;
}
