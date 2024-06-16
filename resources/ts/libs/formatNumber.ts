export default function formatNumber(number: number | string, separatorType: "comma" | "space" = "comma"): string {
  // Convert number to string and remove any non-numeric characters
  let numStr = String(number).replace(/\D/g, "")

  // Determine the separator based on the parameter or default to comma
  let separator: string = ","
  if (separatorType === "space") {
    separator = " "
  }

  // If number is less than 3 characters, return it as is
  if (numStr.length < 3) {
    return numStr
  }

  // Reverse the string to easily insert commas or spaces
  numStr = numStr.split("").reverse().join("")

  // Insert the separator every three characters after the first group
  numStr = numStr.replace(/(\d{3})(?=\d)/g, "$1" + separator).trim()

  // Reverse the string back to original order and return
  return numStr.split("").reverse().join("")
}
