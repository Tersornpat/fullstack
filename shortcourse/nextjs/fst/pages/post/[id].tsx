import { useRouter } from "next/router"

export default function postid() {
    const id = useRouter()
    return (
      <>
        {id.query.id}
      </>
    )
  }