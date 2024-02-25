import { StyleSheet } from "react-native";

const styles = StyleSheet.create({
    header_component : {
        width:'100%',
        height:125,
        backgroundColor: '#040433',
        borderBottomLeftRadius: 100,
        borderBottomRightRadius: 100,
        flexDirection: 'row',
        justifyContent:'center',
        alignItems: 'center',
    },

    header_text: {
        color:'white',
        fontSize:30,
        fontWeight:"bold",
    },

    header_image: {
        marginLeft: 10,
        backgroundColor:"white",
        borderRadius:50,
        padding:5,
    },

    image : {
        width:25,
        height:25,
    },

    modal_image: {
        width:"100%",
        height:300,
      },
    
      modal_container:{
        padding: 50,
        paddingTop: 10,
      }
    
});

export default styles;