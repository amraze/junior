import { StyleSheet } from "react-native";

const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#040433',
      alignItems: 'center',
      justifyContent: 'space-around',
    },
  
    header_text : {
      color:"white",
      fontSize:32,
      fontWeight:"bold"
    },
  
    input: {
      backgroundColor:"white",
      width:250,
      padding:5,
      paddingLeft: 10,
      marginBottom: 10,
      borderRadius:15,
    },
  
    button: {
      borderRadius: 15,
      borderWidth: 1,
      borderColor: "white",
      width:175,
      padding:10,
      alignSelf:"center"
    },
  
    button_text: {
      color:"white",
      textAlign:"center",
    },
  
    footer_text : {
      color:"white",
    }
});

export default styles;